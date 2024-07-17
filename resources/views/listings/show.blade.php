<x-layout>
    <div class="container mt-4">
        <div class="card p-4">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <img class="d-none w-48 mr-6 d-md-block"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                    alt="Company Logo" />
                
                <h3 class="h3 mb-2">{{ $listing->title }}</h3>
                <div class="font-weight-bold mb-4">{{ $listing->company }}</div>
                <ul class="list-inline">
                    <x-listing-tags :listing="$listing" />
                </ul>
                <div class="h5 my-4">
                    <i class="fas fa-map-marker-alt"></i> {{ $listing->location }}
                </div>
                <div class="border border-secondary w-100 mb-4"></div>
                <div>
                    <h3 class="h3 mb-4">
                        Job Description
                    </h3>
                    <p class="text-lg mb-6">
                        {{ $listing->description }}
                    </p>

                    <a href="mailto:{{ $listing->email }}" class="btn btn-danger mt-4 px-4 py-2 rounded"><i
                            class="fas fa-envelope"></i>
                        Contact Employer</a>

                    <a href="{{ $listing->website }}" target="_blank" class="btn btn-dark mt-4 px-4 py-2 rounded"><i
                            class="fas fa-globe"></i> Visit
                        Website</a>
                </div>
            </div>
        </div>
        @can('edit',$listing)
            <div class="card p-4 mt-3">
                <div class="d-flex flex-inline justify-content-center">
                    <a href="/listings/{{ $listing->id }}/edit" class="btn btn-primary px-6 py-2 mx-2"><i
                            class="fa-solid fa-pen-to-square"></i>
                        Edit</a>
                    <button type="button" class="btn btn-danger mx-2  " data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $listing->id }}">
                        <i class="fa-solid fa-trash-can"></i>
                        Delete
                    </button>
                </div>


                <div class="modal fade" id="deleteModal{{ $listing->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Listing</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this listing ?</p>
                            </div>
                            <div class="modal-footer">

                                <form action="{{ route('listing.destroy', ['listing' => $listing->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                        Delete
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
</x-layout>



{{-- <x-layout>

    
    <div class="container mt-4">
        <x-card class="p-12">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="hidden w-48 mr-6 md:block"
                    src={{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}
                    alt="Company Logo" />

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <ul class="flex">
                    <x-listing-tags :listing="$listing" />
                </ul>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $listing->description }}
                        </p>


                        <a href="mailto:{{ $listing->email }}"
                            class="block bg-red-500 text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href={{ $listing->website }} target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>




    </div>

</x-layout> --}}
