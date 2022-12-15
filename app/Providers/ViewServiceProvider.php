<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */

    public function boot()
    {
        View::composer('calc.viewComposer_calc', function ($view) {
            $view->with(['first_number'=>mt_rand(0, 10), 'second_number'=>mt_rand(0, 10)]);
        });
    }
}
