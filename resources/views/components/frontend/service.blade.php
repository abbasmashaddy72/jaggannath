<div class="text-center">
    <div class="group wow fadeInUp" data-wow-delay=".1s">
        <a href="{{ route('service_single', ['id' => $item->id]) }}" class="block">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                class="w-40 h-40 object-cover border-gray-200 border-2 rounded-full shadow-testimonial mx-auto" />
        </a>
        <div class="mt-2">
            <h3>
                <a href="{{ route('service_single', ['id' => $item->id]) }}"
                    class="font-semibold teloginxt-xl text-lg inline-block text-dark hover:text-primary">
                    {{ $item->title }}
                </a>
            </h3>
        </div>
    </div>
</div>
