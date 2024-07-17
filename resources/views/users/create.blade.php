{{-- <x-layout>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Register
                </h2>
                <p class="mb-4">Create an account to post gigs</p>
            </header>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Name
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">
                            Please enter a valid email
                        @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password2" class="inline-block text-lg mb-2">
                        Confirm Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full"
                        name="password_confirmation" />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                        Sign Up
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Already have an account?
                        <a href="{{route('login')}}" class="text-red-500">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout> --}}

<x-layout>
    <div class="container ">
        <div class="bg-light border border-secondary p-4 rounded mx-auto " style="max-width: 40rem;">
            <header class="text-center">
                <h2 class="h2 font-weight-bold text-uppercase mb-1">
                    Register
                </h2>
                <p class="mb-4">Create an account to post gigs</p>
            </header>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-danger small mt-1">
                            Please enter a valid email
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" />
                    @error('password')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password2" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" />
                    @error('password_confirmation')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-danger text-white">
                        Sign Up
                    </button>
                </div>

                <div class="mt-4">
                    <p>
                        Already have an account?
                        <a href="{{route('login')}}" class="text-danger">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>
