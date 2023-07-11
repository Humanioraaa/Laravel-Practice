<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Data;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('delete-data', function (User $user, Data $data) {
            return $data->id_users === $user->id;
        });

        Gate::define('update-data', function (User $user, Data $data) {
            return $data->id_users === $user->id;
        });
        Gate::define('isAdmin', function ($user) {
            return $user->id_roles === 1;
        });
    }
}
