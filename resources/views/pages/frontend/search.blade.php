@push('meta')
    @include('layouts.frontend.meta', [
        'title' => $search_text,
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Searched Results of ') }} {{ $search_text }}
        </x-slot>

    </x-frontend.container>

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Departments') }}
        </x-slot>
        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            @foreach ($departments as $item)
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

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Doctors') }}
        </x-slot>

        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
            <div class="flex flex-wrap -mx-4">
                <!-- First Repeater -->
                @forelse ($teams as $item)
                    @include('components.frontend.team')
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse

            </div>
        </div>
    </x-frontend.container>

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Services') }}
        </x-slot>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4 mt-3">
            <!-- First Repeater -->
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
    </x-frontend.container>

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Blogs') }}
        </x-slot>
        <!-- First Repeater -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-5 lg:gap-10 mx-auto">
            @forelse ($blogs as $item)
                <div class="w-full px-4 flex flex-col">
                    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                        data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-8">
                            <a href="{{ route('blog_single', ['id' => $item->id]) }}" class="block">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                            </a>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <span
                                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    {{ $item->created_at->diffForHumans() }}
                                </span>
                                <span
                                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    {{ $item->team->name }}
                                </span>
                            </div>
                            <h3>
                                <a href="{{ route('blog_single', ['id' => $item->id]) }}"
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="text-base text-body-color whitespace-pre-line">
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
    </x-frontend.container>

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Packages') }}
        </x-slot>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4 mt-3">
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-5 lg:gap-10 mx-auto">
                @forelse ($packages as $item)
                    <div class="w-full px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('package_single', ['id' => $item->id]) }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-40 md:h-56 object-cover" />
                                </a>
                            </div>
                            <div>
                                <h3
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                                    <a href="{{ route('package_single', ['id' => $item->id]) }}"
                                        class="block">
                                        {{ $item->name }}
                                    </a>
                                </h3>
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
    </x-frontend.container>

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Reviews') }}
        </x-slot>

        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            @forelse ($reviews as $item)
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 flex flex-col">
                    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                        data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-8">
                            <div class="w-full">
                                <iframe width="100%" height="285"
                                    src="https://www.youtube.com/embed/{{ $item->image }}?controls=0"></iframe>
                            </div>
                        </div>
                        <div class="flex items-center pb-4 text-sm text-gray-600">
                            @for ($i = 1; $i <= $item->stars; $i++)
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 text-yellow-500 fill-current">
                                    <path
                                        d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                    </path>
                                </svg>
                            @endfor
                            @for ($i = 1; $i <= 5 - $item->stars; $i++)
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 text-gray-400 fill-current dark:text-gray-100">
                                    <path
                                        d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                    </path>
                                </svg>
                            @endfor
                        </div>
                        <div class="flex justify-between">
                            <span
                                class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                {{ $item->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <h3>
                            <div
                                class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                                {{ ucwords(strtolower($item->name)) }}
                            </div>
                        </h3>
                    </div>
                </div>
            @empty
                <div class="w-full px-4">
                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                </div>
            @endforelse

        </div>
    </x-frontend.container>

    <x-frontend.container class="mt-0">
        <x-slot name='banner_name'>
            {{ __('Insurances') }}
        </x-slot>

        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 md:gap-5 mx-auto">
                @foreach ($insurances as $item)
                    <div class="w-full px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                            data-wow-delay=".1s">
                            @if (!\Jenssegers\Agent\Facades\Agent::isMobile())
                                <div class="rounded overflow-hidden mb-8">
                                    <a href="{{ $item->link }}" class="block" target="_blank">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                            class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-40 md:h-56 object-cover" />
                                    </a>
                                </div>
                            @endif
                            <div>
                                <h3>
                                    <a href="{{ $item->link }}"
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-2 inline-block text-dark hover:text-primary">
                                        {{ $item->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-frontend.container>
</x-guest-layout>
