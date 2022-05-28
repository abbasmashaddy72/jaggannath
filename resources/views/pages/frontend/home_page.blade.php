<x-guest-layout>
    @push('styles')
        <link href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" rel="stylesheet">
    @endpush
    @push('scripts')
        <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    @endpush

    <!-- Sliders Section Start -->
    <section class="bg-white pb-10 mt-52">

        <div class="container max-w-screen-2xl mx-auto px-4">
            <div>
                <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    parallax: true,
                    autoplay: {
                        delay: 3500,
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
                                            <img class="object-cover w-screen max-h-44 md:max-h-[40rem] rounded-lg"
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

    <div class="mb-8 text-center md:col-span-6 lg:col-span-5 md:mb-0">
        <h2 class="mb-4 font-extrabold h4 text-3xl font-red-hat-display" data-aos="fade-down">
            {{ $tag_line }}</h2>
    </div>

    @if (\Jenssegers\Agent\Facades\Agent::isMobile() || \Jenssegers\Agent\Facades\Agent::isTablet())
        <div class="flex justify-center">
            <div class="mb-8 text-center space-x-2 space-y-2">
                <a href="{{ route('book_appointment') }}"
                    class="inline-block px-3 py-2 bg-gradient-to-r from-primary via-[#D4497A] to-primary font-semibold text-lg rounded-xl hover:from-secondary hover:to-secondary text-gray-50 transition ease-in-out duration-500">{{ 'Book Appointment' }}</a>
                <a href="{{ route('feedback') }}"
                    class="inline-block px-3 py-2 bg-gradient-to-r from-primary via-[#D4497A] to-primary font-semibold text-lg rounded-xl hover:from-secondary hover:to-secondary text-gray-50 transition ease-in-out duration-500">{{ 'Feedback' }}</a>
                <a href="{{ 'http://124.123.32.48:9999/shivam/onlinereporting/index.jsp' }}"
                    class="inline-block px-3 py-2 bg-gradient-to-r from-primary via-[#D4497A] to-primary font-semibold text-lg rounded-xl hover:from-secondary hover:to-secondary text-gray-50 transition ease-in-out duration-500">{{ 'Online Reports' }}<i
                        data-feather="external-link" width='20' height='20' class="inline"></i></a>
            </div>
        </div>
    @endif

    <!-- Welcome Section Start -->
    <section>
        <div class="max-w-7xl px-4 mx-auto sm:px-6">
            <div class="pt-8 pb-10 md:pt-8 md:pb-16">

                <!-- Hero content -->
                <section>
                    <div class="grid grid-cols-1 lg:grid-cols-2 text-center gap-20">

                        <!-- Content -->
                        <div class="text-center m-auto mb-8">
                            <h2 class="mb-4 font-extrabold h4 text-3xl font-red-hat-display" data-aos="fade-down">
                                {{ 'Welcome to ' }}{{ config('app.name', 'Laravel') }}</h2>
                            <p class="text-justify whitespace-pre-line">
                                {{ $welcome_message }}
                            </p>
                        </div>

                        <!-- Mobile mockup -->
                        <div class="text-center" x-data="{ modalExpanded: false }" data-aos="fade-up" data-aos-delay="450">
                            <div class="relative inline-flex items-center justify-center">
                                <!-- Image inside mockup size: 290x624px (or 580x1248px for >Retina devices) -->
                                <img class="relative h-auto max-w-full mx-auto pointer-events-none rounded-lg md:mr-0 md:max-w-none"
                                    src="{{ asset('storage/' . $hero_image) }}" width="650"
                                    alt="{{ $tag_line }}" aria-hidden="true" />
                                <!-- Play button -->
                                <a class="absolute transition duration-150 ease-in-out cursor-pointer hover:opacity-75"
                                    @click.prevent="modalExpanded = true" aria-controls="modal">
                                    <img src="{{ asset('svg/play-button.svg') }}" width="80" height="80"
                                        alt="Play" />
                                </a>
                            </div>

                            <!-- Modal backdrop -->
                            <div class="fixed inset-0 z-50 transition-opacity bg-black bg-opacity-75"
                                x-show="modalExpanded" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-out duration-100"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                aria-hidden="true" x-cloak></div>

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
                                    @click.outside="modalExpanded = false"
                                    @keydown.escape.window="modalExpanded = false">
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
    <!-- Welcome Section End -->
    <section>
        <div class="max-w-7xl px-4 mx-auto sm:px-6">
            <div class="pt-8 pb-10 md:pt-8 md:pb-16">
                <div class="grid grid-cols-1 md:grid-cols-2 text-center gap-20">
                    <div>
                        <h2 class="mb-4 font-extrabold h4 text-3xl font-red-hat-display" data-aos="fade-down">
                            {{ 'Our Mission' }}</h2>
                        <p class="text-justify whitespace-pre-line">
                            {{ $mission_message }}
                        </p>
                    </div>
                    <div>
                        <h2 class="mb-4 font-extrabold h4 text-3xl font-red-hat-display" data-aos="fade-down">
                            {{ 'Our Vision' }}</h2>
                        <p class="text-justify whitespace-pre-line">
                            {{ $vision_message }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section -->
    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="grid grid-cols-3 gap-10 md:gap-20">
                <!-- first Repeater -->
                @foreach ($features as $item)
                    <div class="text-center">
                        <div class="flex justify-center mb-6">
                            <div class="w-52 py-4 flex justify-center">
                                <img class="rounded-full object-cover shadow-testimonial"
                                    src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" />
                            </div>
                        </div>

                        <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">{{ $item->title }}</h4>
                    </div>
                @endforeach
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- count section -->
    <section class="bg-white mt-6 md:mt-16">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <p class="font-bold text-gray-900 text-xl md:text-2xl text-center uppercase mb-6">Our Progress</p>

            <h1 class="font-normal text-gray-900 text-lg md:text-xl text-center leading-normal mb-10">
                {{ $count_excerpt }}</h1>

            <div class="grid grid-cols-4 gap-10">
                @forelse ($counts as $item)
                    <div class="grid grid-cols-1 md:space-x-20 mb-16 text-center">
                        <div class="mb-5 md:mb-0">
                            <div class="flex justify-center">
                                <div class="w-20 py-6 flex justify-center bg-primary bg-opacity-20 rounded-xl mb-4">
                                    <i data-feather="{{ $item->icon }}"></i>
                                </div>
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

    <!-- feature section -->
    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">


            <p class="font-bold text-gray-900 text-xl md:text-2xl text-center uppercase mb-6">Our Services</p>

            <h1 class="font-normal text-gray-900 text-lg md:text-xl text-center leading-normal mb-10">
                {{ $services_excerpt }}</h1>

            <section class="pb-8">
                <div class="container">
                    @livewire('pagination.frontend.services', ['where' => 'homepage'])
                </div>
            </section>
        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- Google Reviews -->
    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <p class="font-bold text-gray-900 text-lg md:text-2xl text-center uppercase mb-6">Patient Reviews</p>

            <h1 class="font-normal text-gray-900 text-lg md:text-xl text-center leading-normal mb-10">
                {{ $review_excerpt }}</h1>
        </div>
    </section>

    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <section class="pb-8">
                <div class="container">
                    @livewire('pagination.frontend.reviews', ['where' => 'homepage'])
                </div>
            </section>
        </div>

        <div class="flex items-center justify-center">
            <a href="{{ route('reviews') }}"
                class="bg-gradient-to-r from-primary via-[#D4497A] to-primary hover:from-secondary hover:to-secondary px-7 py-5 font-semibold text-white text-lg rounded-xl transition ease-in-out duration-500">More
                Reviews</a>
        </div>

    </section>

    <section class="bg-white mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">
            <p class="font-bold text-gray-900 text-lg md:text-2xl text-center uppercase mb-6">Our Doctors</p>

            <h1 class="font-normal text-gray-900 text-lg md:text-xl text-center leading-normal mb-10">
                {{ $team_excerpt }}</h1>
            <section class="pb-8">
                <div class="container">
                    @livewire('pagination.frontend.teams', ['where' => 'homepage'])
                </div>
            </section>
        </div>

    </section>

    @include('components.frontend.g-reviews')

</x-guest-layout>
