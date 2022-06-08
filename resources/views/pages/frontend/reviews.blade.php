@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Reviews',
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Reviews') }}
        </x-slot>

        @livewire('pagination.frontend.reviews')

    </x-frontend.container>
</x-guest-layout>
