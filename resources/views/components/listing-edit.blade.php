@props(['listing'])


<tr class="border-secondary">
    <td class="d-flex flex-column px-4 py-8 border border-secondary text-decoration-non">
        <span class="fw-bold lead">{{ $listing->title }}</span>
        <span> <i class="fw-bold">Company : </i> {{ $listing->company }} | <i class="fw-bold">User : </i>{{$listing->user->email }}</span>
    </td>
    <td class="border border-secondary text-center my-auto">
        <a href="{{ route('listing.show', ['listing' => $listing->id]) }}" class="btn btn-primary px-6 py-2"><i
                class="fa-solid fa-pen-to-square"></i>
            Show</a>
    </td>
    <td class="border border-secondary text-center">
        <a href="{{ route('listing.edit', ['listing' => $listing->id]) }}" class="btn btn-primary px-6 py-2"><i
                class="fa-solid fa-pen-to-square"></i>
            Edit</a>
    </td>
    <td class=" border border-secondary text-center">
        <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $listing->id }}">
            <i class="fa-solid fa-trash-can"></i>
            Delete
        </button>


        <div class="modal fade" id="deleteModal{{ $listing->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Listing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
    </td>
</tr>
