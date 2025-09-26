<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            // Check if the user is logged in and is an Admin
            if (auth()->check() && !auth()->user()->isAdmin()) {
                // Redirect non-admin users to a different route (or show 403, etc.)
                abort(403, 'You do not have access to this admin panel.');
            }
        });
    }

    public function register()
    {
        // Other service provider registrations
    }
}
