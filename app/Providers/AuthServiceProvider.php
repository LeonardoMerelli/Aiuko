<?php

namespace App\Providers;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isSetup', function ($user) {
            if($user->setup == 0) {
                return true;
            }
            return false;
        });

        Gate::define('isNotRegistered', function ($user) {
            if($user->cognome === null and $user->citta === null and $user->password === null) {
                return true;
            }
            return false;
        });

    }
}
