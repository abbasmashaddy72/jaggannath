@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Blogs',
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Blogs') }}
        </x-slot>

        @livewire('pagination.frontend.blogs')

    </x-frontend.container>
</x-guest-layout>
