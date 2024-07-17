@extends('admin.dashboard')



@section('content')
    @include('partials._search')
    
    <div class="container mt-4">
        <div class="card bg-light border border-secondary p-4 rounded"">
            <header>
                <h1 class="h1 text-center font-weight-bold my-4 text-uppercase">
                    USERS
                </h1>
                <div class="border border-secondary w-100 mb-4"></div>
            </header>
            
            <table class="table">
                <thead>
                    <td class="border border-secondary text-decoration-non">User ID</td>
                    <td class="border border-secondary text-decoration-non"> Email</td>
                </thead>
                <tbody>
                    @unless (count($users) == 0)
                        @foreach ($users as $user)
                            <x-user-edit :user="$user" />
                        @endforeach
                    @else
                        <h2 class="text-center">No Users Found</h2>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>
@endsection
