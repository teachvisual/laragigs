{{-- <x-layout>
    <div class="container ">
        <div class="bg-ligth border border-secondary p-4 rounded mx-auto mt-5" style="max-width: 40rem;">
            <header class="text-center">
                <h2 class="h2 font-weight-bold text-uppercase mb-1">
                    Log In
                </h2>
                <p class="mb-4">Log in to post gigs</p>
            </header>

            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
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
                    <button type="submit" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                        Sign In
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Don't have an account?
                        <a href="{{ route('users.register') }}" class="text-red-500">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout> --}}

<x-layout>
    <div class="container mt-4 ">
        <div class="bg-light border border-secondary p-4 rounded mx-auto mt-5" style="max-width: 40rem;">
            <header class="text-center">
                <h2 class="h2 font-weight-bold text-uppercase mb-1">
                    Log In
                </h2>
                <p class="mb-4">Log in to post gigs</p>
            </header>

            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" />
                    @error('email')
                        <p class="text-danger small">{{ $message }}</p>
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
                    <button type="submit" class="btn btn-danger text-white">
                        Sign In
                    </button>
                </div>

                <div class="mt-4">
                    <p>
                        Don't have an account?
                        <a href="{{route('users.register')}}" class="text-danger">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>

