<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Departments') }}
        </x-slot>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            @foreach ($data as $item)
                <div class="w-1/2 md:w-1/3 lg:w-1/6 px-2 md:px-4 flex flex-col text-center items-center">
                    <div class="mb-4 group wow fadeInUp p-4" data-wow-delay=".1s">
                        <a href="{{ route('department_single', ['id' => $item->id]) }}" class="block">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                class="w-40 h-40 object-cover border-gray-200 border-2 rounded-full shadow-testimonial mx-auto" />
                        </a>
                        <div class="mt-2">
                            <h3>
                                <a href="{{ route('department_single', ['id' => $item->id]) }}"
                                    class="font-semibold teloginxt-xl text-lg md:mb-4 inline-block text-dark hover:text-primary">
                                    {{ $item->name }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </x-frontend.container>
</x-guest-layout>
