<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view) {
           
            $view->with('usersCount', User::count());
            $view->with('postsCount', Post::count());
            $view->with('usersIsBanned', User::where('isbanned', 1)->count());
            $view->with('postsIsBanned', Post::where('status', 0)->count());
        });
    }
}
