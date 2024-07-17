<x-layout>
    <div class="container mt-4">
        <div class="card bg-light border border-secondary p-4 rounded mx-auto mt-5" style="max-width: 40rem;">
            <header class="text-center">
                <h2 class="h2 font-weight-bold text-uppercase mb-1">
                    Edit Gig
                </h2>
                <p class="mb-4">Edit: {{ $listing->title }}</p>
            </header>
            
            <form action="{{ route('listing.update', ['listing' => $listing->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="company" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company" value='{{ $listing->company }}' />
                    @error('company')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Job Title</label>
                    <input type="text" class="form-control" name="title"
                        placeholder="Example: Senior Laravel Developer" value='{{ $listing->title }}' />
                    @error('title')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Job Location</label>
                    <input type="text" class="form-control" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value='{{ $listing->location }}' />
                    @error('location')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Contact Email</label>
                    <input type="text" class="form-control" name="email" value='{{ $listing->email }}' />
                    @error('email')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Website/Application URL</label>
                    <input type="text" class="form-control" name="website" value='{{ $listing->website }}' />
                    @error('website')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags (Comma Separated)</label>
                    <input type="text" class="form-control" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value='{{ $listing->tags }}' />
                    @error('tags')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Company Logo</label>
                    <input type="file" class="form-control" name="logo" />
                    <img class="d-none w-48 mr-6 d-md-block"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                        alt="Company Logo" />
                    @error('logo')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Job Description</label>
                    <textarea class="form-control" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>
                    @error('description')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <button class="btn btn-danger text-white rounded py-2 px-4 hover:bg-black">
                        Update Gig
                    </button>

                    <a href="{{ route('listing.manage') }}" class="btn btn-dark ml-4">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>


{{-- <x-layout>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Edit Gig
                </h2>
                <p class="mb-4">Edit: {{ $listing->title }}</p>
            </header>

            <form action="{{ route('listing.update' , ['listing' => $listing->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                        value='{{ $listing->company }}' />
                    @error('company')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        placeholder="Example: Senior Laravel Developer" value='{{ $listing->title }}' />
                    @error('title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value='{{ $listing->location }}' />
                    @error('location')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value='{{ $listing->email }}' />
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2">
                        Website/Application URL
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                        value='{{ $listing->website }}'' />
                    @error('website')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value='{{ $listing->tags }}' />
                    @error('tags')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Company Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                    <img class="hidden w-48 mr-6 md:block " src={{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/no-image.png')}} alt="Company Logo" />
                    @error('logo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Job Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc">
                        '{{ $listing->description }}'
    </textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black text-lg">
                        Update Gig
                    </button>

                    <a href="dashboard.html" class="text-black ml-4">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout> --}}
