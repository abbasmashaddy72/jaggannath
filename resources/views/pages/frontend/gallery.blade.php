@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Gallery',
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Gallery') }}
        </x-slot>

        <div id="all" class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12 justify-center">
            <!-- First Repeater -->
            @foreach ($directories as $item)
                <div class="flex-none mr-8 border rounded-3xl">
                    <div class="space-y-4 cursor-pointer">
                        <div class="px-4 py-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <a href="#{{ strtolower(str_replace(' ', '_', pathinfo($item)['filename'])) }}"
                                    for="{{ preg_replace('/[0-9]+/', '', pathinfo($item)['filename']) }}">
                                    <input type='radio'
                                        id="{{ preg_replace('/[0-9]+/', '', pathinfo($item)['filename']) }}" hidden
                                        value="{{ preg_replace('/[0-9]+/', '', pathinfo($item)['filename']) }}" />
                                    <span
                                        class="font-bold text-gray-800 text-lg cursor-pointer">{{ preg_replace('/[0-9]+/', '', pathinfo($item)['filename']) }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- First Repeater -->
        @foreach ($directories as $path)
            <section id={{ strtolower(str_replace(' ', '_', pathinfo($path)['filename'])) }}>
                <div class="container">
                    <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-left mb-16">
                        {{ preg_replace('/[0-9]+/', '', pathinfo($path)['filename']) }}</h1>
                    <div class="flex flex-wrap -mx-4">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-2 mx-auto">
                            @foreach (\File::files('storage/' . $path) as $item)
                                <div class="w-full px-4 flex flex-col">
                                    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                                        data-wow-delay=".1s">
                                        <div class="rounded overflow-hidden mb-8">
                                            <a href="{{ asset(pathinfo($item)['dirname'] . '/' . pathinfo($item)['basename']) }}"
                                                class="lightbox">
                                                <img loading="lazy" src="https://via.placeholder.com/310x224"
                                                    data-src="{{ asset(pathinfo($item)['dirname'] . '/' . pathinfo($item)['basename']) }}"
                                                    alt="{{ preg_replace('/[^A-Za-z0-9\-]/', ' ', pathinfo($item)['filename']) }}"
                                                    class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover lazyload" />
                                            </a>
                                        </div>
                                        <div>
                                            <h3
                                                class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                                                {{ preg_replace('/[^A-Za-z0-9\-]/', ' ', pathinfo($item)['filename']) }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

    </x-frontend.container>
    @push('scripts')
        <script>
            if ("loading" in HTMLImageElement.prototype) {
                var images = document.querySelectorAll('img[loading="lazy"]');
                var sources = document.querySelectorAll("source[data-srcset]");
                sources.forEach(function(source) {
                    source.srcset = source.dataset.srcset;
                });
                images.forEach(function(img) {
                    img.src = img.dataset.src;
                });
            } else {
                var script = document.createElement("script");
                script.src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js";
                document.body.appendChild(script);
            }
        </script>
    @endpush
</x-guest-layout>
