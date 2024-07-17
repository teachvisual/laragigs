@props(['user'])


<tr class="border-secondary">
    <td class="border border-secondary text-center my-auto">
        <span class="">{{ $user->id }}</span>
    </td>
    
    <td class="border border-secondary text-center my-auto">
        <span class="">{{ $user->email }}</span>
    </td>
    <td class="border border-secondary text-center">
       
        <a href="{{ route('admin.edit', ['user' => $user->id]) }}" class="btn btn-primary px-6 py-2"><i
                class="fa-solid fa-pen-to-square"></i>
            Edit</a>
    </td>
    
    <td class=" border border-secondary text-center">
        <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $user->id }}">
            <i class="fa-solid fa-trash-can"></i>
            Delete
        </button>


    {{-- <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this user ?</p>
                    </div>
                    <div class="modal-footer">

                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
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
        </div> --}}
    {{-- </td> --}}
</tr>
