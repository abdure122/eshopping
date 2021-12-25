<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Product;
use App\Policies\UserPolicy;
use App\Policies\ProductPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',

        Product::class => ProductPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-panel', function (User $user) {
            return $user->role === 'admin'
                || $user->role === 'campany'
                && $user->status === 'allow';
        });

        // Gate::define('viewProduct', function (User $user) {
        //     return $user->role === 'admin'
        //         ? Response::allow()
        //         : Response::deny('You do not own this product.');
        // });
        Gate::define('updateProduct', function (User $user) {
            return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not own this product.');
        });
    }
}
