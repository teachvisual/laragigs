<section class="laravel-bg text-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-4 fw-bold">
                    Lara<span class="text-dark">Gigs</span>
                </h1>
                <p class="lead fw-bold my-4">
                    Find or post Laravel jobs & projects
                </p>
                <div>
                    @auth
                        <a href="{{route('listing.create')}}" class="btn btn-outline-light btn-lg text-uppercase">
                            Post a Gig
                        </a>
                    @else
                        <a href="{{route('users.register')}}" class="btn btn-outline-light btn-lg text-uppercase">
                            Sign Up to List a Gig
                        </a>
                    @endauth

                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="images/laravel-logo.png" alt="Laravel Logo" class="img-fluid opacity-25 w-50">
            </div>
        </div>
    </div>
</section>

{{-- 
<section class="laravel-bg text-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold">
                    Lara<span class="text-dark">Gigs</span>
                </h1>
                <p class="lead fw-bold my-4">
                    Find or post Laravel jobs & projects
                </p>
                <a href="/register" class="btn btn-outline-light btn-lg text-uppercase">
                    Sign Up to List a Gig
                </a>
            </div>
            <div class="col-md-6"></div>
        
        </div>
    </div>

</section> --}}
