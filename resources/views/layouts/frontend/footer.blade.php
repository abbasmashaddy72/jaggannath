<footer class="bg-white py-16">

    <div class="container max-w-screen-2xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row lg:justify-between">

            <div class="space-y-7 mb-10 lg:mb-0">
                <div class="flex justify-center lg:justify-start">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ asset('storage/' . $logo) }}" class="w-52 h-auto" alt="Logo">
                    </a>
                </div>

                <div class="flex items-center justify-center lg:justify-start space-x-5">
                    <a href="{{ $facebook }}"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-primary hover:text-white transition ease-in-out duration-500">
                        <i data-feather="facebook"></i>
                    </a>
                    <a href="{{ $instagram }}"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-primary hover:text-white transition ease-in-out duration-500">
                        <i data-feather="instagram"></i>
                    </a>
                    <a href="{{ $linkedin }}"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-primary hover:text-white transition ease-in-out duration-500">
                        <i data-feather="linkedin"></i>
                    </a>
                    <a href="{{ $twitter }}"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-primary hover:text-white transition ease-in-out duration-500">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="{{ $youtube }}"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-primary hover:text-white transition ease-in-out duration-500">
                        <i data-feather="youtube"></i>
                    </a>
                    {{-- <a href="{{ $google_business }}"
                        class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-primary hover:text-white transition ease-in-out duration-500">
                        <i data-feather="chrome"></i>
                    </a> --}}
                </div>
            </div>

            <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">Quick links</h4>

                <a href="{{ route('terms') }}"
                    class="block font-light text-gray-800 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Terms</a>

                <a href="{{ route('privacy') }}"
                    class="block font-light text-gray-800 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Privacy</a>

                <a href="{{ route('career') }}"
                    class="block font-light text-gray-800 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">Career</a>
            </div>

            @if (!Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <div>
                    <iframe src="{{ $embed_map_link }}" width="600" height="200" style="border:0;" allowfullscreen=""
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
