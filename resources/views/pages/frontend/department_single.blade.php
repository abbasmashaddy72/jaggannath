<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ $data->name }}
        </x-slot>

        <!-- Blog Details -->
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 justify-center items-center -mx-4">
                    <div>
                        <div class="mb-4 group wow fadeInUp p-4" data-wow-delay=".1s">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                                class="w-40 h-40 object-cover border-gray-200 border-2 rounded-full shadow-testimonial mx-auto" />
                        </div>
                    </div>
                    <div class="col-span-2">
                        <p class="mx-8 mb-8 text-base leading-relaxed text-body-color wow fadeInUp whitespace-pre-line text-justify"
                            data-wow-delay=".1s">
                            {{ $data->excerpt }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Doctors
                </h2>
                <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
            </div>
            <!-- First Repeater -->
            @forelse ($teams as $item)
                @include('components.frontend.team')
            @empty
                <div class="w-full px-4">
                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                </div>
            @endforelse
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Services Performed by Doctors
                </h2>
                <span class="h-[2px] bg-primary w-96 mb-10 inline-block"></span>
            </div>
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <div class="flex flex-wrap -mx-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 md:gap-4 mx-auto">
                        @forelse ($services as $item)
                            @include('components.frontend.service')
                        @empty
                            <div class="w-full px-4">
                                <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
