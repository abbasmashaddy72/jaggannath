<footer class="bg-gradient-to-r from-primary to-secondary py-16">

    <div class="container max-w-screen-2xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row lg:justify-between">

            <div class="space-y-7 mb-10 lg:mb-0">
                <div class="flex justify-center lg:justify-start">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ asset('storage/' . $logo) }}" class="w-52 h-auto" alt="Logo">
                    </a>
                </div>

                <div class="flex justify-start max-w-xs text-gray-50">
                    <p>{{ $address }}</p>
                </div>
                <div class="flex justify-start max-w-xs">
                    <a href="mail:{{ $email }}">
                        <p class="text-base text-gray-100">{{ $email }}</p>
                    </a>
                </div>
                @foreach ($contact_no as $item)
                    <div class="flex justify-start max-w-xs">
                        <a href="tel:{{ $item }}">
                            <p class="text-base text-gray-100">{{ $item }}</p>
                        </a>
                    </div>
                @endforeach

                <div class="flex items-center justify-center lg:justify-start space-x-3">
                    <a href="{{ $facebook }}" target="_blank"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-blue-500 hover:text-white transition ease-in-out duration-500">
                        <i data-feather="facebook"></i>
                    </a>
                    <a href="{{ $instagram }}" target="_blank"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-pink-500 hover:text-white transition ease-in-out duration-500">
                        <i data-feather="instagram"></i>
                    </a>
                    <a href="{{ $linkedin }}" target="_blank"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-indigo-700 hover:text-white transition ease-in-out duration-500">
                        <i data-feather="linkedin"></i>
                    </a>
                    <a href="{{ $twitter }}" target="_blank"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-blue-400 hover:text-white transition ease-in-out duration-500">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="{{ $youtube }}" target="_blank"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-red-500 hover:text-white transition ease-in-out duration-500">
                        <i data-feather="youtube"></i>
                    </a>
                    <a href="{{ $google_business }}" target="_blank"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-blue-400 hover:text-white transition ease-in-out duration-500">
                        <img src="{{ asset('svg/google-my-business.svg') }}" width="24" height="24" alt="Play" />
                    </a>
                </div>
            </div>

            <div class="text-center lg:text-left space-y-5 mb-10 lg:mb-0">
                <h4 class="font-semibold text-gray-100 text-lg md:text-2xl">Quick links</h4>

                <a href="{{ route('terms') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Terms</a>

                <a href="{{ route('privacy') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Privacy</a>

                <a href="{{ route('career') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Career</a>

                <a href="{{ route('about_us') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">About
                    Us</a>

                <a href="{{ route('blogs') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Blogs</a>

                <a href="{{ route('packages') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Packages</a>

                <a href="{{ route('feedback') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Feedback</a>
            </div>

            @if (!Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <div>
                    <iframe src="{{ $embed_map_link }}" width="600" height="360" style="border:0;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            @else
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="{{ $embed_map_link }}" width="600" height="200" style="border:0;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            @endif

        </div>
    </div>
    <!-- container.// -->

</footer>
<!-- ====== Back To Top Start -->
@if (!Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
    <!-- Back to top button -->
    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block p-3 bg-primary text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-secondary hover:shadow-lg focus:bg-secondary focus:shadow-lg focus:outline-none focus:ring-0 active:bg-secondary active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5"
        id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>
    <!-- ====== Back To Top End -->
@endif
