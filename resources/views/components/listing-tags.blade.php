@props(['listing'])


@foreach (explode(',', $listing->tags) as $tag)
    {{-- <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3  mr-2 text-xs">
        <a href="/listings?tags={{ $tag }}" class="text-white hover:opacity-80">{{ $tag }}</a>
    </li> --}}
    <li class="d-inline-flex bg-dark rounded-pill me-1 mt-2">
        <a href="/?tags={{ $tag }}"
            class="btn btn-sm text-light text-decoration-non ">{{ $tag }}</a>
    </li>
@endforeach
