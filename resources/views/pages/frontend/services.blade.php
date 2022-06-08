@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Services',
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Services') }}
        </x-slot>

        @livewire('pagination.frontend.services')

    </x-frontend.container>
</x-guest-layout>
