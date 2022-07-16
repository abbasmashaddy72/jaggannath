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
                <div class="grid grid-cols-1 lg:grid-cols-3 justify-center items-center -mx-4">
                    <div>
                        <div class="mb-4 group wow fadeInUp p-4" data-wow-delay=".1s">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                                class="w-40 h-40 object-cover border-gray-200 border-2 rounded-full shadow-testimonial mx-auto" />
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="mx-8 mb-8 text-base leading-relaxed text-body-color wow fadeInUp whitespace-pre-line text-justify"
                            data-wow-delay=".1s">
                            {{ $data->excerpt }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-8 ck-content">
            {!! $data->description !!}
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Related Services
                </h2>
                <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
            </div>
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 md:gap-4 mx-auto">
                @forelse ($related as $item)
                    @include('components.frontend.service')
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Related Doctors
                </h2>
                <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
            </div>

            <!-- First Repeater -->
            @forelse ($teams as $item)
                @include('components.frontend.team')
            @empty
                <div class="w-full px-4">
                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                </div>
            @endforelse

        </div>

    </x-frontend.container>
</x-guest-layout>
