@props(['listing'])


{{-- <div class="flex">
    <img class="hidden w-48 mr-6 md:block" src={{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/no-image.png')}} alt="Company Logo" />
    <div>
        <h3 class="text-2xl">
            <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
        </h3>
        <div class="text-xl font-bold mb-4">{{ $listing->company }}
            <ul class="flex">
                <x-listing-tags :listing="$listing"/> 
            </ul>
            
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</div> --}}


<div class="d-flex ">
    <img class="d-none d-md-block me-3" style="width: 12rem;"
        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
        alt="Company Logo" />
    <div>
        <h3 class="fs-2">
            <a href="{{ route('listing.show', ['listing' => $listing->id]) }}" class="text-decoration-none text-dark fs-5">{{ $listing->title }}</a>
        </h3>
        <div class="fs-5  fw-bold mb-4">
            {{ $listing->company }}
            <ul class="d-flex list-unstyled">
                <x-listing-tags :listing="$listing" />
            </ul>

            <div class="fs-5 mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</div>
