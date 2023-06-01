@push('meta')
    @include('layouts.frontend.meta', [
        'title' => 'Faqs',
        'description' => 'Some Text for SEO',
        'keywords' => 'Some Keywords for SEO',
    ])
@endpush
<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Faqs') }}
        </x-slot>

        <div class="md:flex justify-center">
            <div class="lg:w-2/3 md:w-full">
                <div id="accordion-collapse" data-accordion="collapse" class="mt-6">
                    @foreach ($data as $item)
                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden">
                            <h2 class="text-base font-semibold bg-white dark:bg-slate-900"
                                id="accordion-collapse-heading-{{ $loop->index }}">
                                <button type="button"
                                    class="flex justify-between items-center p-5 w-full font-medium ltr:text-left rtl:text-right"
                                    data-accordion-target="#accordion-collapse-body-{{ $loop->index }}"
                                    aria-expanded="true" aria-controls="accordion-collapse-body-{{ $loop->index }}">
                                    <span>{{ $item->question }}</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-{{ $loop->index }}"
                                class="hidden bg-white dark:bg-slate-900"
                                aria-labelledby="accordion-collapse-heading-{{ $loop->index }}">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">{{ $item->answer }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-frontend.container>
</x-guest-layout>
