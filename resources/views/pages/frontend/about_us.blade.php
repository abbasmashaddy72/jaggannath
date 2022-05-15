<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('About Us') }}
        </x-slot>

        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
            <div class="flex flex-wrap -mx-4">
                <!-- First Repeater -->
                @foreach ($data as $item)
                    <div class="w-full p-4">
                        <div
                            class="lg:flex items-center justify-between border-gray-200 border-2 overflow-hidden shadow-testimonial rounded-lg">
                            @if ($loop->iteration % 2 == 0)
                                <div
                                    class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                    <h2
                                        class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                                        {{ $item->title }}
                                    </h2>
                                    <p class="text-base text-body-color mb-9 leading-relaxed">
                                        {{ $item->excerpt }}
                                    </p>
                                </div>
                                <div class="text-center">
                                    <div class="relative inline-block z-10">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                            class="mx-auto lg:ml-auto" />
                                    </div>
                                </div>
                            @else
                                <div class="text-center">
                                    <div class="relative inline-block z-10">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                            class="mx-auto lg:ml-auto" />
                                    </div>
                                </div>
                                <div
                                    class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                    <h2
                                        class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                                        {{ $item->title }}
                                    </h2>
                                    <p class="text-base text-body-color mb-9 leading-relaxed">
                                        {{ $item->excerpt }}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
