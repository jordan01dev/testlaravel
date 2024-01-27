<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;  // Assurez-vous d'ajouter cette ligne en haut pour resoudre l'erreur du cle


use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191); // Ajoutez cette ligne pour corriger l'erreur du cle
    }


}
