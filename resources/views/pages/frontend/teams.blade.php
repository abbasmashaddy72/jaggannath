@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Doctors'
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Doctors') }}
        </x-slot>

        @livewire('pagination.frontend.teams')

    </x-frontend.container>
</x-guest-layout>
