@extends('admin.dashboard')



@section('content')
    <div class="container mt-4 ">
        <div class="bg-light border border-secondary p-4 rounded mx-auto mt-5" style="max-width: 40rem;">
            <header class="text-center">
                <h2 class="h2 font-weight-bold text-uppercase mb-1">
                    Edit User
                </h2>
            
            </header>
            <span class="lead font-weight-bold text-uppercase mb-1">
                Edit Email
            </span>
            <div class="border border-secondary w-100 mb-4"></div>
            
            
            <form action="{{ route('admin.updateEmail', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">>
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                    @error('email')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>                
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger text-white ">
                        Save Changes
                    </button>
                </div>

            
            </form>
            <span class="lead font-weight-bold text-uppercase mb-1">
                Edit Password
            </span>
            <div class="border border-secondary w-100 mb-4"></div>
            <form action="{{ route('admin.updatePassword', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                
    
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-danger text-white">
                        Save Changes
                    </button>
                </div>
        </div>
    </div>
@endsection
