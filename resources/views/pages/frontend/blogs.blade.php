<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Blogs') }}
        </x-slot>

        <!-- Select Category -->
        <div class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12">
            <!-- First Repeater -->
            <div class="flex-none mr-8 border rounded-3xl">
                <a href="{{ route('blogs') }}" class="space-y-4">
                    <div class="px-4 py-2">
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="font-bold text-gray-800 text-lg">
                                Doctor Name
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg" data-wow-delay=".1s">
                    <div class="rounded overflow-hidden mb-8">
                        <a href="{{ route('blog_single') }}" class="block">
                            <img src="assets/images/blog/blog-01.jpg" alt="image"
                                class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
                        </a>
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <span
                                class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                Dec 22, 2023
                            </span>
                            <span
                                class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                Doctor name
                            </span>
                        </div>
                        <h3>
                            <a href="{{ route('blog_single') }}"
                                class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="text-base text-body-color">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </x-frontend.container>
</x-guest-layout>
