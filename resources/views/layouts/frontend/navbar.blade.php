<nav class="flex-wrap lg:flex items-center" x-data="{ navbarOpen: false }">
    <div class="flex items-center mb-10 lg:mb-0">
        <a href="{{ route('homepage') }}">
            <img src="assets/image/navbar-logo.png" alt="Logo">
        </a>

        <button
            class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md"
            @click="navbarOpen = !navbarOpen">
            <i data-feather="menu"></i>
        </button>
    </div>

    <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14"
        :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('blogs') }}">Blogs</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('services') }}">Services</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('teams') }}">Teams</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('reports') }}">Reports</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('events') }}">Events</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('about_us') }}">About Us</a>
        </li>
        <li class="font-semibold text-gray-900 hover:text-gray-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
            <a href="{{ route('contact_us') }}">Contact Us</a>
        </li>
    </ul>

    <div class="lg:flex flex-col md:flex-row md:items-center text-center md:space-x-6"
        :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
        <a href="{{ route('book_appointment') }}"
            class="px-6 py-4 border-2 border-blue-500 text-blue-500 font-semibold text-lg rounded-xl hover:bg-blue-700 hover:text-white transition ease-linear duration-500">Book
            Appointment</a>
    </div>
</nav>
