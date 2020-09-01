<?php

namespace App\Providers;

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
        $pages = (object) [
            [
                'link' => '/',
                'name' => 'Accueil'
            ],
            [
                'link' => 'association',
                'name' => 'Association'
            ],
            [
                'link' => 'formations',
                'name' => 'Formations'
            ],
            [
                'link' => 'labellisation',
                'name' => 'Labellisation'
            ],
        ];
        View::share('pages', $pages);
    }
}
