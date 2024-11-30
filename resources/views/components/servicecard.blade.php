<div class="px-3 py-12 flex flex-col items-center text-center">
    <h2 class="font-bebas text-5xl py-3">{{ $title }} </h2>
    <p class="italic">{{ $price }}</p>
    <p class="text-lg">{{ $description }}</p>

    <div class="flex flex-wrap py-6 px-2">
        {{ $slot }}
    </div>
    <x-contact-button/>
</div>