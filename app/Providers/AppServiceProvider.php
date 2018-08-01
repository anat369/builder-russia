<?php

namespace App\Providers;

use App\Organization;
use App\Project;
use App\Service;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // используем встроенный визуальный композер laravel,
        // чтобы выводить на всех страницах одинаковые элементы,
        view()->composer('pages.header', function($view){
            $view->with('projects', Project::all());
            $view->with('services',Service::all());
        });
        View::share('organization', Organization::latest()->first());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
