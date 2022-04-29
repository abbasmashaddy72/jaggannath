<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Teams') }}
        </x-slot>

        <!-- Select Category -->
        <div class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12">
            <!-- First Repeater -->
            <div class="flex-none mr-8 border rounded-3xl">
                <a href="#" class="space-y-4">
                    <div class="px-4 py-2">
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="font-bold text-gray-800 text-lg">
                                Department Name
                            </h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
            <div class="flex flex-wrap -mx-4">
                <!-- First Repeater -->
                <div class="w-full px-4">
                    <div class="lg:flex items-center justify-between border overflow-hidden">
                        <div
                            class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                            <div class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-3">
                                Doctor Name
                            </div>
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Qualification:
                                <p class="text-lg text-dark inline">
                                    Qualification
                                </p>
                            </div>
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Department:
                                <p class="text-lg text-dark inline">
                                    Department
                                </p>
                            </div>
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Profile:
                            </div>
                            <p class="text-base text-body-color mb-3 leading-relaxed">
                                The main ‘thrust' is to focus on educating attendees on how
                                to best protect highly vulnerable business applications with
                                interactive panel.
                            </p>
                            <div class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                Area of Expertise:
                            </div>
                            <p class="text-base text-body-color mb-3 leading-relaxed">
                            <ul>
                                <li>1</li>
                                <li>1</li>
                                <li>1</li>
                                <li>1</li>
                            </ul>
                            </p>
                        </div>
                        <div class="text-center">
                            <div class="relative inline-block z-10">
                                <img src="assets/images/about/about-image.svg" alt="image" class="mx-auto lg:ml-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
