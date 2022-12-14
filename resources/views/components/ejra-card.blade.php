@props(['ejra'])
<x-card>
    {{-- <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
            alt="" />
        <div> --}}

    <div class="flex flex-row-reverse pb-2 text-bold">
        <h3 class="text-2xl ">
            <a href="/ejras/{{ $ejra->id }}"> {{ $ejra->e_name }} </a>
        </h3>
    </div>
    <div class="flex flex-row-reverse">
        <x-ejra-tags :tagsCsv="$ejra->tags" />
    </div>
    <div class="flex flex-row-reverse text-sm md:text-xl">
        <x-ejra-show-docs :docsCsv="$ejra->docs" />
    </div>
    <div class="text-lg mt-4 flex flex-row-reverse space-x-5">
        <i class="fa-solid fa-location-dot px-2"> </i> {{ $ejra->location }}
    </div>
    {{-- </div>
    </div> --}}
</x-card>
