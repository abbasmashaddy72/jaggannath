<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ $data->name }}
        </x-slot>

        <!-- Blog Details -->
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="relative rounded overflow-hidden z-20 mb-[60px] h-[300px] md:h-[400px] lg:h-[500px] wow fadeInUp"
                    data-wow-delay=".1s">
                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                        class="object-cover object-center w-full h-full" />
                    <div
                        class="absolute top-0 left-0 z-10 flex items-end w-full h-full  bg-gradient-to-t from-dark-700 to-transparent">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center -mx-4">
                    <div class="w-full px-4">
                        <div>
                            <h2 class="font-bold text-dark text-[26px] sm:text-3xl md:text-4xl leading-snug sm:leading-snug md:leading-snug mb-6 wow fadeInUp"
                                data-wow-delay=".1s">
                                {{ $data->name }}
                            </h2>
                            <p class="mb-8 text-base leading-relaxed  text-body-color wow fadeInUp" data-wow-delay=".1s">
                                {{ $data->excerpt }}</p>
                        </div>
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
            @foreach ($teams as $item)
                @include('components.frontend.team')
            @endforeach
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
                    @foreach ($services as $item)
                        <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                            <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                                data-wow-delay=".1s">
                                <div class="rounded overflow-hidden mb-8">
                                    <a href="{{ route('service_single', ['id' => $item->id]) }}"
                                        class="block">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                            class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                                    </a>
                                </div>
                                <div>
                                    <div class="flex justify-end">
                                        <span
                                            class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                            {{ $item->department->name }}
                                        </span>
                                    </div>
                                    <h3>
                                        <a href="{{ route('service_single', ['id' => $item->id]) }}"
                                            class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                            {{ $item->title }}
                                        </a>
                                    </h3>
                                    <p class="text-base text-body-color">
                                        {{ $item->excerpt }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
