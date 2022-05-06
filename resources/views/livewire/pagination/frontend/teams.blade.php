<div>
    <!-- Select Category -->
    <div class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12">
        <!-- First Repeater -->
        @foreach ($department as $item)
            <div class="flex-none mr-8 border rounded-3xl">
                <div class="space-y-4 cursor-pointer">
                    <div class="px-4 py-2">
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <label for={{ $item->id }}>
                                <input type='radio' id="{{ $item->id }}" hidden value="{{ $item->id }}"
                                    wire:model='department_id' />
                                <span class="font-bold text-gray-800 text-lg cursor-pointer">{{ $item->name }}</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            @forelse ($data as $item)
                <div class="w-full p-4">
                    <div class="lg:flex items-center justify-between border overflow-hidden">
                        @if ($loop->iteration % 2 == 0)
                            <div
                                class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                <div
                                    class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-3">
                                    {{ $item->name }}
                                </div>
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
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Area of Expertise:
                                </div>
                                <p class="text-base text-body-color mb-3 leading-relaxed">
                                <ul>
                                    @foreach ($item->services as $service)
                                        <li>{{ $service->title }}</li>
                                    @endforeach
                                </ul>
                                </p>
                            </div>
                            <div class="text-center">
                                <div class="relative inline-block z-10">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="mx-auto lg:ml-auto" />
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <div class="relative inline-block z-10">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="mx-auto lg:ml-auto" />
                                </div>
                            </div>
                            <div
                                class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                <div
                                    class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-3">
                                    {{ $item->name }}
                                </div>
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
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Area of Expertise:
                                </div>
                                <p class="text-base text-body-color mb-3 leading-relaxed">
                                <ul>
                                    @foreach ($item->services as $service)
                                        <li>{{ $service->title }}</li>
                                    @endforeach
                                </ul>
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="w-full px-4">
                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                </div>
            @endforelse

        </div>
    </div>
</div>
