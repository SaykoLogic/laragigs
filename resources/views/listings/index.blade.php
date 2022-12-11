<x-layout-card>

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if (count($listings) == 0)
            <p>NO listings found</p>
        @else
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @endif

    </div>
    <div class="p-6 mt-5">
        {{ $listings->links() }}
    </div>
</x-layout-card>
