<!-- ====== Navbar Section Start -->
<div class="sticky top-0 left-0 z-40 flex items-center w-full bg-white">
    <div class="container max-w-screen-2xl mx-auto px-4 pb-4">
        <nav class="flex-wrap lg:flex items-center" x-data="{ navbarOpen: false }">

            <div class="flex items-center mb-10 lg:mb-0 py-5">
                <a href="{{ route('homepage') }}">
                    <img src="assets/image/navbar-logo.png" alt="Logo">
                </a>

                <button
                    class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md"
                    @click="navbarOpen = !navbarOpen">
                    <i data-feather="menu"></i>
                </button>
            </div>

            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-4 xl:space-x-7"
                :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('departments') }}">Departments</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('teams') }}">Teams</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('packages') }}">Packages</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('insurance') }}">Insurance</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('reviews') }}">Reviews</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('career') }}">Career</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('about_us') }}">About Us</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('contact_us') }}">Contact Us</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('book_appointment') }}">Book Appointment</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ route('feedback') }}">Feedback</a>
                </li>
                <li
                    class="font-semibold text-gray-900 transition ease-in-out duration-300 mb-5 lg:mb-0 hover:scale-125 hover:rotate-6">
                    <a href="{{ 'http://124.123.32.48:9999/shivam/onlinereporting/index.jsp' }}"
                        target="blank">Reports <i data-feather="external-link" width='20' height='20'
                            class="inline"></i></a>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- ====== Navbar Section End -->
