<x-layout>
    @include('partials._search')

    <div class="container mt-4">
        <div class="card bg-light border border-secondary p-4 rounded"">
            <header>
                <h1 class="h1 text-center font-weight-bold my-4 text-uppercase">
                    Manage Gigs
                </h1>
                <div class="border border-secondary w-100 mb-4"></div>
            </header>

            <table class="table">
                <tbody>
                    @unless (count($listings) == 0)
                        @foreach ($listings as $listing)
                        <x-listing-edit :listing="$listing" />                        
                        @endforeach
                    @else
                     <h2 class="text-center">No Listings Found</h2>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
