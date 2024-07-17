<?php

namespace App\Providers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FacadesGate::define('edit', function (User $user, Listing $listing) {
            return $user->id == $listing->user_id || $user->is_admin == true;
        });

        FacadesGate::define('admin', function (User $user) {
            return  $user->is_admin;
        });
    }
}
