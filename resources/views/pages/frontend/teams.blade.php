<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Teams') }}
        </x-slot>

        @livewire('pagination.frontend.teams')

    </x-frontend.container>
</x-guest-layout>
