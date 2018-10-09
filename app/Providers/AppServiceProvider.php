<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('layouts.bootstrap', function ($view) {
            //
            $pages = collect(scandir(resource_path('views/page')))
            ->filter(function($file){
                return strpos($file, '.blade.php') !== false;
            })->map(function($file){
                return str_replace('.blade.php','',$file);
            });
            $view->with('pages', $pages);
        });
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
