@props(['ejra'])
<x-card>
    {{-- <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
            alt="" />
        <div> --}}
    <h3 class="text-2xl">
        <a href="/ejras/{{ $ejra->id }}"> {{ $ejra->e_name }} </a>
    </h3>
    <x-ejra-tags :tagsCsv="$ejra->tags" />
    <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{ $ejra->location }}
    </div>
    </div>
    </div>
</x-card>
