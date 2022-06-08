@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Departments',
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Departments') }}
        </x-slot>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 md:gap-4 mx-auto">
                @foreach ($data as $item)
                    <div class="mb-4 group wow fadeInUp p-4 text-center items-center" data-wow-delay=".1s">
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
                @endforeach
            </div>

        </div>

    </x-frontend.container>
</x-guest-layout>
