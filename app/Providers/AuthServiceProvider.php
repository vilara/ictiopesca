<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Permission;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
//         'App\Photo' => '\App\Policies\PhotoPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        
      
    //    $this->registerPolicies();
        
              
               
        $permissions = Permission::with('rolers')->get();
        
        foreach ($permissions as $permission){
            Gate::define($permission->name, function (User $user) use ($permission){
               
                return $user->hasPermission($permission);
                        });
        }
    }
}
