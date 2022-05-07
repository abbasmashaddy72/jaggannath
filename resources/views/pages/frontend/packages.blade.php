<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Packages') }}
        </x-slot>

        @livewire('pagination.frontend.packages')

    </x-frontend.container>
</x-guest-layout>
