<x-layout-card>

    @include('partials._search')
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">

                <h3 class="text-2xl mb-2">{{ $ejra->e_name }}</h3>
                {{-- <div class="text-xl font-bold mb-4"> {{ $ejra->tags }} </div> --}}

                <x-ejra-tags :tagsCsv="$ejra->tags" />
                <div class="">المستندات المطلوبة</div>
                <x-ejra-show-docs class="flex flex-wrap" :docsCsv="$ejra->docs" />

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $ejra->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div class="text-lg my-4 font-bold"> الاجراء بالكامل </div>
                <div class="text-sm my-4 sl:mx-0 md:text-lg"> {{ $ejra->details }} </div>
            </div>
        </x-card>
        {{-- @auth
            <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/ejras/{{ $ejra->id }}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
                <form action="/ejras/{{ $ejra->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">
                        <i class="fa-solid fa-trash"></i>Delete
                    </button>
                </form>
            </x-card>

        @endauth --}}
    </div>

</x-layout-card>
