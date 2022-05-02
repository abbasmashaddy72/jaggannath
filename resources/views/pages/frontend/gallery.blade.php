<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Gallery') }}
        </x-slot>

        <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-left mb-16">Latest to donate</h1>
        <!-- First Repeater -->
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg" data-wow-delay=".1s">
                    <div class="rounded overflow-hidden mb-8">
                        <img src="assets/images/blog/blog-01.jpg" alt="image"
                            class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                    </div>
                    <div>
                        <h3
                            class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                            Meet AutoManage, the best AI management tools
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
