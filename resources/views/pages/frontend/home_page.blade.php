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

            <p class="font-light text-gray-900 text-lg md:text-xl text-center uppercase mb-6">Our Services</p>

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-10">
                {{ $services_excerpt }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                @forelse ($services as $item)
                    <div class="w-full px-2">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('service_single') }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
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
                                        {{ $item->department->name }}
                                    </span>
                                </div>
                                <h3>
                                    <a href="{{ route('service_single') }}"
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
                    class="px-7 py-5 bg-blue-500 font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">More
                    Services</a>
            </div>
        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- feature section -->
    <section class="bg-white py-16">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <div class="flex flex-col lg:flex-row justify-between space-x-16">
                <div class="flex justify-center lg:justify-start">
                    <img src="{{ url('storage/' . $count_image) }}" alt="Image">
                </div>

                <div class="mt-16">
                    <h1 class="font-semibold text-gray-900 text-xl md:text-4xl mb-20">{{ $count_excerpt }}</h1>

                    @foreach ($counts_first2 as $item)
                        <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-16">
                            <div class="mb-5 md:mb-0">
                                <div class="w-20 py-6 flex justify-center bg-blue-500 bg-opacity-5 rounded-xl mb-4">
                                    <i data-feather="{{ $item->icon }}"></i>
                                </div>

                                <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{ $item->value }}
                                </h3>

                                <p class="font-light text-gray-800 text-md md:text-lg">{{ $item->title }}</p>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($counts_last2 as $item)
                        <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-16">
                            <div class="mb-5 md:mb-0">
                                <div class="w-20 py-6 flex justify-center bg-blue-500 bg-opacity-5 rounded-xl mb-4">
                                    <i data-feather="{{ $item->icon }}"></i>
                                </div>

                                <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{ $item->value }}
                                </h3>

                                <p class="font-light text-gray-800 text-md md:text-lg">{{ $item->title }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- Google Reviews -->
    @include('components.frontend.g-reviews')

    <!-- join volunters section -->
    <section class="bg-white py-16">

        <div class="container max-w-screen-2xl mx-auto px-4">

            <div class="w-full h-full bg-blue-500 rounded-2xl md:rounded-3xl relative lg:flex items-center">
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
