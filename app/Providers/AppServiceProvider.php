<?php

namespace App\Providers;

use App\Content;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Blade::component('page.components.menu', 'menu');

        $contacto = Content::where('section', "contacto")->first();
        View::share('contacto', $contacto);

        //dd($contacto);
        //metadatos
//        $metadato     = Metadato::where('seccion', 'home')->first();
//        View::share('metadato', $metadato);

    }
}
