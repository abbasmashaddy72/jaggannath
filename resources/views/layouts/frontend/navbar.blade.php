<!-- ====== Navbar Section Start -->
<div class="fixed top-0 left-0 z-40 flex items-center w-full bg-primary border-solid border-secondary border-b-[12px]">
    <div class="container max-w-screen-2xl mx-auto">

        <nav class="flex-wrap lg:flex items-center justify-between pt-4 px-4" x-data="{ navbarOpen: false }">
            <div class="hidden lg:block"></div>
            <div class="flex items-center justify-center lg:justify-start space-x-3">
                @include('components.frontend.social-media-icons')
            </div>
            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:space-x-4 xl:space-x-7"
                :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                <a href="{{ route('book_appointment') }}"
                    class="px-3 py-2 bg-white font-semibold text-sm 2xl:text-base rounded-xl hover:bg-secondary hover:text-gray-50 transition ease-in-out duration-500 {{ Request::is('book_appointment*') ? 'bg-secondary text-gray-50' : '' }}">{{ 'Book Appointment' }}</a>
                <a href="{{ route('feedback') }}"
                    class="px-3 py-2 bg-white font-semibold text-sm 2xl:text-base rounded-xl hover:bg-secondary hover:text-gray-50 transition ease-in-out duration-500 {{ Request::is('feedback*') ? 'bg-secondary text-gray-50' : '' }}">{{ 'Feedback' }}</a>
                <a href="{{ 'http://124.123.32.48:9999/shivam/onlinereporting/index.jsp' }}" target="_blank"
                    class="px-3 py-2 bg-white font-semibold text-sm 2xl:text-base rounded-xl hover:bg-secondary hover:text-gray-50 transition ease-in-out duration-500">{{ 'Online Reports' }}<i
                        data-feather="external-link" width='20' height='20' class="inline"></i></a>
            </ul>
        </nav>

        <nav class="flex-wrap lg:flex items-center justify-between lg:py-4" x-data="{ navbarOpen: false }">

            <div class="flex items-center px-4">
                <a href="{{ route('homepage') }}">
                    <img loading="lazy" data-src="{{ asset('storage/' . $logo) }}"
                        class="w-52 h-auto lg:-mt-14 lg:absolute lazyload" alt="Logo">
                </a>

                <button
                    class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-white text-white rounded-md"
                    @click="navbarOpen = !navbarOpen">
                    <i data-feather="menu"></i>
                </button>
            </div>

            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:space-x-4 mt-4 lg:mt-0 xl:space-x-7 bg-white lg:bg-primary px-4"
                :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 mt-5 lg:mt-0 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('/*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('department*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('departments') }}">Departments</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('team*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('teams') }}">Doctors</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('service*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('package*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('packages') }}">Packages</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('insurance*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('insurance') }}">Insurance</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('review*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('reviews') }}">Reviews</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('blog*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('gallery*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('about_us*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('about_us') }}">About Us</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('contact_us*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('contact_us') }}">Contact Us</a>
                </li>

                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('career*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('career') }}">Career</a>
                </li>
            </ul>
        </nav>

        <form action="{{ route('search') }}">
            @csrf
            <div class="flex lg:justify-end pt-4 pb-4 px-4 lg:pt-0">
                <div class="relative w-full lg:w-1/4">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" name="search" minlength="3"
                        class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-secondary focus:border-secondary"
                        placeholder="Search Services, Doctors, Departments, Blogs..." required>
                    <button type="submit"
                        class="text-white absolute right-1.5 bottom-1.5 bg-primary hover:bg-secondary font-medium rounded-lg text-sm px-2 py-1">Search</button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- ====== Navbar Section End -->
