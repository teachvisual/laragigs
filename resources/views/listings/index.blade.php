{{-- <x-layout>
    @include('partials._hero')
    @include('partials._search')
    
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-card>
                    <x-listing-card :listing="$listing" />
                </x-card>
            @endforeach
        @else
            <p>No Listings Found</p>
        @endunless
    </div>
    <div class="mt-4 p-4">
        {{$listings->links()}}
    </div>
</x-layout> --}}


<x-layout>
    @include('partials._hero')
    @include('partials._search')


    <div class="row mx-4 gy-4 ">
        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <div class="col-lg-6">
                    <x-card>
                        <x-listing-card :listing="$listing" />
                    </x-card>
                </div>
            @endforeach
        @else
            <p>No Listings Found</p>
        @endunless
    </div>
    <div class="mt-4 p-4">
        {{ $listings->links() }}
    </div>

</x-layout>
