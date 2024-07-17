<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href{{ asset('images/favicon.png') }} />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .laravel-bg {
            background-color: #ef3b2d;
        }

        .laravel-text {
            color: #ef3b2d;
        }
    </style>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-light bg-light    ">
        <a href="/" class="navbar-brand"><img class="w-24" src={{ asset('images/logo.png') }} alt=""
                class="logo" /></a>
        @auth
            <div class="navbar-nav">
                <ul class="d-flex list-unstyled mr-4 fs-4">
                    <li class="me-2">
                        <span class="btn text-decoration-non fs-4">Hello {{ Auth::user()->name }}</span>
                    </li>
                    <li class="me-2 ">
                        @can('admin')
                            <a href="/admin/users" class="btn text-decoration-non fs-4">
                                <i class="fa-solid fa-chart-pie"></i>
                                Dashboard
                            </a>
                        @endcan
                    </li>
                    <li class="me-2">
                        <a href="/listings/manage" class="btn text-decoration-non fs-4">
                            <i class="fa-solid fa-gear"></i>
                            Manage Gigs
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn text-decoration-non fs-4">
                                <i class="fa-solid fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <div class="navbar-nav">
                <ul class="d-flex list-unstyled mr-4 fs-4 ">
                    <li class="me-3 ">
                        <a href="{{ route('users.register') }}" class="btn text-decoration-non fs-4 "><i
                                class="fa-solid fa-user-plus"></i>
                            Register</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="btn text-decoration-non fs-4"><i
                                class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a>
                    </li>
                </ul>
            </div>
        @endauth

    </nav>

    <main class="flex-fill">
        {{ $slot }}
    </main>

    <footer class="laravel-bg text-light fw-bold py-3 mt-5">
        <div class="container d-flex justify-content-between align-items-center">
            <p class="mb-0 ms-2">Copyright &copy; 2024, All Rights reserved</p>
            @auth
                <a href="{{ route('listing.create') }}" class="btn  btn-dark">Post Job</a>
            @endauth
        </div>
    </footer>

    <x-flash-message />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>
