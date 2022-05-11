<x-guest-layout>
    @push('styles')
        <link href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" rel="stylesheet">
    @endpush
    @push('scripts')
        <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    @endpush

    <!-- Sliders Section Start -->
    <section class="bg-white py-10 md:mb-10">

        <div class="container max-w-screen-2xl mx-auto px-4">
            <div>
                <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    parallax: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    speed: 800,
                })" class="relative flex mx-auto flex-">
                    <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                        <button @click="swiper.slidePrev()"
                            class="flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow lg:-ml-4 focus:outline-none">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-left">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="swiper-container" x-ref="container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($slider_images as $item)
                                <div class="swiper-slide">
                                    <div class="flex flex-col overflow-hidden rounded shadow">
                                        <div class="flex-shrink-0">
                                            <img class="object-cover w-screen h-96 md:h-4/5"
                                                src="{{ url('storage/' . $item->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                        <button @click="swiper.slideNext()"
                            class="flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow lg:-mr-4 focus:outline-none">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-right">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sliders Section End -->

    <!-- Tag Line Section Start -->
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-10 md:pt-40 md:pb-16">

                <!-- Hero content -->
                <div class="items-center md:grid md:grid-cols-12 md:gap-12 lg:gap-20">

                    <!-- Content -->
                    <div class="mb-8 text-left md:col-span-7 lg:col-span-7 md:mb-0">
                        <h2 class="mb-4 font-extrabold h4 lg:text-3xl font-red-hat-display" data-aos="fade-down">
                            {{ $tag_line }}</h2>
                        <div class="flex flex-col justify-center max-w-sm mx-auto mt-8 sm:flex-row sm:max-w-md md:mx-0"
                            data-aos="fade-down" data-aos-delay="300">
                            <a href="{{ $tag_action_button_link }}"
                                class="px-3 py-2 bg-primary font-semibold text-white text-lg rounded-xl hover:bg-secondary transition ease-in-out duration-500">{{ $tag_action_button_text }}</a>
                        </div>
                    </div>

                    <!-- Mobile mockup -->
                    <div class="text-center md:col-span-5 lg:col-span-5 md:text-right" x-data="{ modalExpanded: false }"
                        data-aos="fade-up" data-aos-delay="450">
                        <div class="relative inline-flex items-center justify-center">
                            <!-- Glow illustration -->
                            <svg class="absolute mt-32 mr-12 pointer-events-none -z-1 dark:opacity-40"
                                aria-hidden="true" width="678" height="634" viewBox="0 0 678 634" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="240" cy="394" r="240" fill="url(#piphoneill_paint0_radial)"
                                    fill-opacity=".4" />
                                <circle cx="438" cy="240" r="240" fill="url(#piphoneill_paint1_radial)"
                                    fill-opacity=".6" />
                                <defs>
                                    <radialGradient id="piphoneill_paint0_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="rotate(90 -77 317) scale(189.054)">
                                        <stop stop-color="#667EEA" />
                                        <stop offset="1" stop-color="#667EEA" stop-opacity=".01" />
                                    </radialGradient>
                                    <radialGradient id="piphoneill_paint1_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="rotate(90 99 339) scale(189.054)">
                                        <stop stop-color="#9F7AEA" />
                                        <stop offset="1" stop-color="#9F7AEA" stop-opacity=".01" />
                                    </radialGradient>
                                </defs>
                            </svg>
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for >Retina devices) -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none rounded-xl md:mr-0 md:max-w-none"
                                src="{{ asset('storage/' . $hero_image) }}" width="344" height="674"
                                alt="{{ $tag_line }}" aria-hidden="true" />
                            <!-- Play button -->
                            <a class="absolute transition duration-150 ease-in-out cursor-pointer hover:opacity-75"
                                @click.prevent="modalExpanded = true" aria-controls="modal">
                                <img src="{{ asset('svg/play-button.svg') }}" width="80" height="80" alt="Play" />
                            </a>
                        </div>

                        <!-- Modal backdrop -->
                        <div class="fixed inset-0 z-50 transition-opacity bg-black bg-opacity-75" x-show="modalExpanded"
                            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true"
                            x-cloak></div>

                        <!-- Modal dialog -->
                        <div id="modal"
                            class="fixed inset-0 z-50 flex items-center justify-center px-4 overflow-hidden transform sm:px-6"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-show="modalExpanded"
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-8" x-cloak>
                            <div class="w-full max-w-6xl max-h-full overflow-auto bg-white"
                                @click.outside="modalExpanded = false" @keydown.escape.window="modalExpanded = false">
                                <div class="relative pb-[56.25%]">
                                    <iframe class="absolute w-full h-full"
                                        src="https://www.youtube.com/embed/{{ $hero_video }}" title="Video"
                                        webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Tag Line Section End -->

    <!-- feature section -->
    <section class="bg-white py-16 md:mt-10">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                <!-- first Repeater -->
                @foreach ($features as $item)
                    <div class="text-center">
                        <div class="flex justify-center mb-6">
                            <div class="w-52 py-4 flex justify-center">
                                <img class="rounded-xl object-cover" src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}" />
                            </div>
                        </div>

                        <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">{{ $item->title }}</h4>

                        <p class="font-light text-gray-900 text-md md:text-xl mb-6">{{ $item->excerpt }}</p>
                    </div>
                @endforeach
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- feature section -->
    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <p class="font-light text-gray-900 text-lg md:text-xl text-center uppercase mb-6">Our Services</p>

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">
                {{ $services_excerpt }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                @forelse ($services as $item)
                    <div class="w-full px-2">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('service_single', ['id' => $item->id]) }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                                </a>
                            </div>
                            <div>
                                <div class="flex justify-end">
                                    <span
                                        class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                        {{ $item->department->name }}
                                    </span>
                                </div>
                                <h3>
                                    <a href="{{ route('service_single', ['id' => $item->id]) }}"
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    {{ $item->excerpt }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse
            </div>
            <div class="flex items-center justify-center">
                <a href="{{ route('services') }}"
                    class="px-7 py-5 bg-primary font-semibold text-white text-lg rounded-xl hover:bg-secondary transition ease-in-out duration-500">More
                    Services</a>
            </div>
        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- count section -->
    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <p class="font-light text-gray-900 text-lg md:text-xl text-center uppercase mb-6">Our Progress</p>

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">
                {{ $count_excerpt }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-10">
                @forelse ($counts as $item)
                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-16">
                        <div class="mb-5 md:mb-0">
                            <div class="w-20 py-6 flex justify-center bg-primary bg-opacity-20 rounded-xl mb-4">
                                <i data-feather="{{ $item->icon }}"></i>
                            </div>

                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{ $item->value }}
                            </h3>

                            <p class="font-light text-gray-800 text-md md:text-lg">{{ $item->title }}</p>
                        </div>
                    </div>
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse
            </div>
        </div> <!-- container.// -->

    </section>
    <!-- count section //end -->

    <!-- Google Reviews -->
    @include('components.frontend.g-reviews')

    <!-- join volunters section -->
    <section class="bg-white py-16">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <div class="w-full h-full bg-primary rounded-2xl md:rounded-3xl relative lg:flex items-center">
                <div class="hidden lg:block">
                    <img src="assets/image/humans.png" alt="Image" class="relative z-10">

                    <img src="assets/image/pattern-2.png" alt="Image" class="absolute top-14 left-40">

                    <img src="assets/image/pattern.png" alt="Image" class="absolute top-0 z-0">
                </div>

                @livewire('form.frontend.newsletter')
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- join volunters section //end -->

</x-guest-layout>
