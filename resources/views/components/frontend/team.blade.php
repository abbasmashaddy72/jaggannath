<div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/6 p-4">
    <div class="c-card block bg-white shadow-testimonial rounded-lg h-full flex flex-1 flex-col justify-betwee">
        <a href="{{ route('team_single', ['id' => $item->id]) }}">
            <div class="relative pb-48 overflow-hidden h-64">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ ucwords(strtolower($item->name)) }}"
                    class="justify-center absolute inset-0 h-64 w-64 object-cover hover:scale-125 m-auto rounded-t-lg">
            </div>
        </a>
        <div class="px-4">
            <a href="{{ route('team_single', ['id' => $item->id]) }}">
                <h2 class="mt-2 mb-2 text-lg font-bold">{{ ucwords(strtolower($item->name)) }}</h2>
            </a>
            <div class="text-sm text-dark mb-3">
                {{ $item->qualification }}
            </div>
            <div class="text-sm text-dark mb-3">
                {{ $item->department->name }}
            </div>
        </div>
        <div class="flex justify-center mt-auto mb-4">
            <a href="{{ route('book_appointment', ['team_id' => $item->id]) }}"
                class="bg-primary hover:bg-secondary px-3 py-2 font-semibold text-white text-sm rounded-xl transition ease-in-out duration-500">Book
                Appointment</a>
        </div>
    </div>
</div>
