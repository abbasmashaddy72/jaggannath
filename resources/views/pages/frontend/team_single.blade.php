<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ ucwords(strtolower($data->name)) }}
        </x-slot>

        <!-- Blog Details -->
        <section class="pt-20 lg:pt-[60px] pb-10 lg:pb-20">
            <div class="container">
                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full px-4">
                        <div class="lg:flex items-center justify-between overflow-hidden">
                            <div
                                class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Qualification:
                                    <p class="text-lg text-dark inline">
                                        {{ $data->qualification }}
                                    </p>
                                </div>
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Department:
                                    <p class="text-lg text-dark inline">
                                        {{ $data->department->name }}
                                    </p>
                                </div>
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Profile:
                                </div>
                                <p class="text-base text-body-color mb-3 leading-relaxed">
                                    {{ $data->profile }}
                                </p>
                                <div class="text-center mt-10">
                                    <a href="{{ route('book_appointment', ['team_id' => $data->id]) }}"
                                        class="px-3 py-2 bg-primary font-semibold text-white text-lg rounded-xl hover:bg-secondary transition ease-in-out duration-500">Book
                                        Appointment</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="relative inline-block z-10">
                                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                                        class="mx-auto lg:ml-auto" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Grip -->
                    <div class="flex flex-wrap -mx-4 mt-6">
                        <!-- First Repeater -->
                        @forelse ($data->services as $item)
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                                    data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="{{ route('service_single', ['id' => $item->id]) }}"
                                            class="block">
                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                alt="{{ $item->title }}"
                                                class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                                        </a>
                                    </div>
                                    <div>
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
                        @empty
                            <div class="w-full px-4">
                                <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                            </div>
                        @endforelse

                    </div>
                </div>

                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                            Related Doctors
                        </h2>
                        <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
                    </div>
                    <!-- First Repeater -->
                    @foreach ($related as $item)
                        <div class="w-full p-4">
                            <div
                                class="lg:flex items-center justify-between border-gray-200 border-2 overflow-hidden shadow-testimonial rounded-lg">
                                @if ($loop->iteration % 2 == 0)
                                    <div
                                        class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                        <a href="{{ route('team_single', ['id' => $item->id]) }}">
                                            <div
                                                class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-3 hover:text-primary">
                                                {{ ucwords(strtolower($item->name)) }}
                                            </div>
                                        </a>
                                        <div
                                            class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                            Qualification:
                                            <p class="text-lg text-dark inline">
                                                {{ $item->qualification }}
                                            </p>
                                        </div>
                                        <div
                                            class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                            Department:
                                            <p class="text-lg text-dark inline">
                                                {{ $item->department->name }}
                                            </p>
                                        </div>
                                        <div
                                            class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                            Profile:
                                        </div>
                                        <p class="text-base text-body-color mb-3 leading-relaxed">
                                            {{ $item->profile }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="relative inline-block z-10">
                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                alt="{{ $item->name }}" class="mx-auto lg:ml-auto" />
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <div class="relative inline-block z-10">
                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                alt="{{ $item->name }}" class="mx-auto lg:ml-auto" />
                                        </div>
                                    </div>
                                    <div
                                        class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                        <a href="{{ route('team_single', ['id' => $item->id]) }}">
                                            <div
                                                class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-3 hover:text-primary">
                                                {{ ucwords(strtolower($item->name)) }}
                                            </div>
                                        </a>
                                        <div
                                            class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                            Qualification:
                                            <p class="text-lg text-dark inline">
                                                {{ $item->qualification }}
                                            </p>
                                        </div>
                                        <div
                                            class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                            Department:
                                            <p class="text-lg text-dark inline">
                                                {{ $item->department->name }}
                                            </p>
                                        </div>
                                        <div
                                            class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                            Profile:
                                        </div>
                                        <p class="text-base text-body-color mb-3 leading-relaxed">
                                            {{ $item->profile }}
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </x-frontend.container>
</x-guest-layout>
