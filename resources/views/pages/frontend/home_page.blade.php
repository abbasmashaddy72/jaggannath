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
            <div class="pt-32 md:pt-40">
                <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
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
                                            <img class="object-cover w-auto h-96 md:h-4/5"
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

    <!-- feature section -->
    <section class="bg-white md:mt-10">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <p class="font-light text-gray-900 text-lg md:text-xl text-center uppercase mb-6">Our features</p>

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">We believe we
                can save <br> more life with you</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <i data-feather="globe"></i>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Transparent</h4>

                    <p class="font-light text-gray-900 text-md md:text-xl mb-6">Donations and distributions can be seen
                        transparently</p>

                    <div class="flex justify-center">
                        <a href="#"
                            class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-blue-500 hover:text-white transition ease-linear duration-500">
                            Learn more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <i data-feather="arrow-up-right"></i>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Quick Fundraise</h4>

                    <p class="font-light text-gray-900 text-md md:text-xl mb-6">The simple and quickest way to make a
                        donation</p>

                    <div class="flex justify-center">
                        <a href="#"
                            class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-blue-500 hover:text-white transition ease-linear duration-500">
                            Learn more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <i data-feather="clock"></i>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-gray-900 mb-6">Real Time</h4>

                    <p class="font-light text-gray-900 text-md md:text-xl mb-6">Reports related to donations and
                        distribution are updated directly</p>

                    <div class="flex justify-center">
                        <a href="#"
                            class="flex items-center gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-blue-500 hover:text-white transition ease-linear duration-500">
                            Learn more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- feature section -->
    <section class="bg-white py-16">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <div class="flex flex-col lg:flex-row justify-between space-x-16">
                <div class="flex justify-center lg:justify-start">
                    <img src="assets/image/feature-img.png" alt="Image">
                </div>

                <div class="mt-16">
                    <h1 class="font-semibold text-gray-900 text-xl md:text-4xl mb-20">You can help lots of people by
                        <br> donating
                    </h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-16">
                        <div class="mb-5 md:mb-0">
                            <div class="w-20 py-6 flex justify-center bg-blue-500 bg-opacity-5 rounded-xl mb-4">
                                <i data-feather="sun" class="text-info"></i>
                            </div>

                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">10000+</h3>

                            <p class="font-light text-gray-800 text-md md:text-lg">Fundraising campaign in <br> all
                                time</p>
                        </div>

                        <div>
                            <div class="w-20 py-6 flex justify-center bg-red-500 bg-opacity-5 rounded-xl mb-4">
                                <i data-feather="award" class="text-red-500"></i>
                            </div>

                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">$120M+</h3>

                            <p class="font-light text-gray-800 text-md md:text-lg">Raised and counting <br> donations
                                in all time</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20">
                        <div class="mb-5 md:mb-0">
                            <div class="w-20 py-6 flex justify-center bg-yellow-500 bg-opacity-5 rounded-xl mb-4">
                                <i data-feather="users" class="text-yellow-500"></i>
                            </div>

                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">1200+</h3>

                            <p class="font-light text-gray-800 text-md md:text-lg">Our volunteer around the <br> world
                            </p>
                        </div>

                        <div>
                            <div class="w-20 py-6 flex justify-center bg-green-500 bg-opacity-5 rounded-xl mb-4">
                                <i data-feather="trending-up" class="text-green-500"></i>
                            </div>

                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">98%</h3>

                            <p class="font-light text-gray-800 text-md md:text-lg">Positive review from <br> public</p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- join volunters section -->
    <section class="bg-white py-16">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <div class="w-full h-full bg-blue-500 rounded-2xl md:rounded-3xl relative lg:flex items-center">
                <div class="hidden lg:block">
                    <img src="assets/image/humans.png" alt="Image" class="relative z-10">

                    <img src="assets/image/pattern-2.png" alt="Image" class="absolute top-14 left-40">

                    <img src="assets/image/pattern.png" alt="Image" class="absolute top-0 z-0">
                </div>

                <div class="lg:relative py-4 lg:py-0">
                    <h1
                        class="font-semibold text-white text-xl md:text-4xl text-center lg:text-left leading-normal md:mb-5 lg:mb-10">
                        Interested in volunteering? Join <br> with us now</h1>

                    <div class="hidden md:block flex items-center text-center lg:text-left space-x-5">
                        <input type="text" placeholder="Email"
                            class="px-4 py-4 w-96 bg-gray-50 placeholder-gray-800 rounded-xl outline-none">

                        <button
                            class="px-6 py-4 font-semibold bg-gray-50 text-info text-lg rounded-xl hover:bg-blue-500 hover:text-white transition ease-in-out duration-500">Join</button>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- join volunters section //end -->

</x-guest-layout>
