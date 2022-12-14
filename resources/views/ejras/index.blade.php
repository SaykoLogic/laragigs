<x-layout-card>

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if (count($ejra) == 0)
            <p>لا توجد نتائج</p>
        @else
            @foreach ($ejra as $ejra)
                <x-ejra-card :ejra="$ejra" />
            @endforeach
        @endif

    </div>
    {{-- <div class="p-6 mt-5">
        {{ $ejra->links() }}
    </div> --}}
</x-layout-card>
