<?php

namespace App\Providers;

use App\Models\Link;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        View::composer('layouts.app',function ($view) {
            $headerTitle = 'Laravel Articles';
            $headerText = 'Everyone can learn Laravel, but you can learn more tricks with us .';
            $linkCount = count(Link::all());
            $view->with(['headerTitle' =>$headerTitle,'headerText' => $headerText,'linkCount' =>$linkCount]);
        });
    }
}
