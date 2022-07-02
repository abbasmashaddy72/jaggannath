@push('styles')
    @include('components.backend.ckeditor_style')
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('oembed[url]').forEach(element => {
                // get just the code for this youtube video from the url
                let vCode = element.attributes.url.value.split('?v=')[1];
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML = `
    <div class="aspect-w-16 aspect-h-9">
        <iframe src="https://www.youtube.com/embed/${vCode}?rel=0" width="800" height="450" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>`;
            });
        })
    </script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('p > a').forEach(element => {
                // get just the code for this youtube video from the url
                let href = element.attributes.href.value;
                let text = element.innerHTML;
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML =
                    `
                <p class="m-2 text-center"><a class="ml-6 text-white capitalize bg-blue-500 btn-sm hover:bg-blue-300" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
@push('meta')
    @include('layouts.frontend.meta', [
        'title' => $data->title,
        'description' => $data->excerpt,
        'image' => '//images.weserv.nl/?url=' . asset('storage/' . $data->image) . '&w=200&h=200',
        'keywords' => $data->tags,
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ $data->title }}
        </x-slot>

        <!-- Blog Details -->
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="flex flex-col justify-center items-center -mx-4">
                    <div class="w-full px-4 lg:w-8/12">
                        <div>
                            <div class="mb-8 ck-content">
                                {!! $data->description !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Related Blogs
                </h2>
                <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
            </div>
            <!-- First Repeater -->
            @foreach ($related as $item)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                        data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-8">
                            <a href="{{ route('blog_single', ['id' => $item->id]) }}" class="block">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                            </a>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <span
                                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    {{ $item->created_at->diffForHumans() }}
                                </span>
                                <span
                                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    {{ $item->team->name }}
                                </span>
                            </div>
                            <h3>
                                <a href="{{ route('blog_single', ['id' => $item->id]) }}"
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="text-base text-body-color whitespace-pre-line">
                                {{ $item->excerpt }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </x-frontend.container>
</x-guest-layout>
