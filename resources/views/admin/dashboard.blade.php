<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-39e9UaGkm/+yp6spIsVfzcs3j7ac7G2cg0hzmDvtG11pT1d7YMnOC26w4wMPhzsL" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
        body,
        html {
            height: 100%;
        }

        .sidebar {
            width: 250px;
        }
    </style>
</head>

<body>
    <div class="d-flex h-100">
        <div class="sidebar sidebar-dark border-end h-100">
            <div class="sidebar-header border-bottom">
                <a class="nav-link active" href="#">
                    Hello {{ Auth::user()->name }}
                </a>
            </div>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.users')}}">
                        <i class="nav-icon cil-speedometer"></i> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.listings')}}">
                        <i class="nav-icon cil-speedometer"></i> Listings
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer border-top d-flex">
                <a class="nav-link active" href="/">
                    Back to Laragigs
                </a>
            </div>

        </div>
        <div class="flex-grow-1 p-3">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/js/coreui.bundle.min.js"
        integrity="sha384-/lLdeDXcg75fFKvNaXc6K+P80Jk8U+1mKJUYqkLSxqr18HIUvJYVN42+m23Zbw4b" crossorigin="anonymous">
    </script>
</body>

</html>
