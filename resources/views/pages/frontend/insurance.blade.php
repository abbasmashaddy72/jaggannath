<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Insurance') }}
        </x-slot>

        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg" data-wow-delay=".1s">
                    <div class="rounded overflow-hidden mb-8">
                        <a href="#" class="block">
                            <img src="assets/images/blog/blog-01.jpg" alt="image"
                                class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                        </a>
                    </div>
                    <div>
                        <h3>
                            <a href="#"
                                class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
