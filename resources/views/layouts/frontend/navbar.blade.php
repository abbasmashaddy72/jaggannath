<!-- ====== Navbar Section Start -->
<div class="fixed top-0 left-0 z-40 flex items-center w-full bg-primary py-4">
    <div class="container max-w-screen-2xl mx-auto">
        <nav class="flex-wrap lg:flex items-center justify-between lg:py-4" x-data="{ navbarOpen: false }">

            <div class="flex items-center px-4">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('storage/' . $logo) }}" class="w-44 h-auto mt-4 lg:-mt-8 lg:absolute"
                        alt="Logo">
                </a>

                <button
                    class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-white text-white rounded-md mt-4"
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
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('doctor*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('teams') }}">Doctors</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('service*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('blog*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('faq*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('faqs') }}">Faqs</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('gallery*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('contact_us*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('contact_us') }}">Contact Us</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('practice_places*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('practice_places') }}">{{ 'Practice Places' }}</a>
                </li>
                <li
                    class="font-semibold text-primary lg:text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('book_appointment*') ? 'underline underline-offset-2 decoration-primary lg:decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('book_appointment') }}">{{ 'Book Appointment' }}</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- ====== Navbar Section End -->
