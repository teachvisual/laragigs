<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <header class="text-center mb-4">
                            <h2 class="h2 fw-bold text-uppercase mb-1">
                                Create a Gig
                            </h2>
                            <p class="mb-4">Post a gig to find a developer</p>
                        </header>

                        <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="company" class="form-label">Company Name</label>
                                <input type="text" class="form-control @error('company') is-invalid @enderror"
                                    id="company" name="company" value="{{ old('company') }}" />
                                @error('company')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Job Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" placeholder="Example: Senior Laravel Developer"
                                    value="{{ old('title') }}" />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Job Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                    id="location" name="location" placeholder="Example: Remote, Boston MA, etc"
                                    value="{{ old('location') }}" />
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Contact Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="website" class="form-label">
                                    Website/Application URL
                                </label>
                                <input type="url" class="form-control @error('website') is-invalid @enderror"
                                    id="website" name="website" value="{{ old('website') }}" />
                                @error('website')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label">
                                    Tags (Comma Separated)
                                </label>
                                <input type="text" class="form-control @error('tags') is-invalid @enderror"
                                    id="tags" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc"
                                    value="{{ old('tags') }}" />
                                @error('tags')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="form-label">
                                    Company Logo
                                </label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                    id="logo" name="logo" />
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    Job Description
                                </label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="10" placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-danger" type="submit">
                                    Create Gig
                                </button>

                                <a href="/" class="btn btn-link text-dark"> Back </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

{{-- <x-layout>
    <div class="mx-4">
        <x-card class=" max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Create a Gig
                </h2>
                <p class="mb-4">Post a gig to find a developer</p>
            </header>

            <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{{ old('company') }}" />
                    @error('company')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
                    @error('location')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2">
                        Website/Application URL
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{ old('website') }}" />
                    @error('website')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />
                    @error('tags')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Company Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" value="{{ old('logo') }}" />
                    @error('logo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Job Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc" >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black" type="submit">
                        Create Gig
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </x-card>
    </div>
</x-layout> --}}
