<?php
namespace Funfare\MigrationAnalyzer\Providers;

use Illuminate\Support\ServiceProvider;

class MigrationProvider extends ServiceProvider{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        #$this->mergeConfigFrom(
        #    __DIR__.'/../config/courier.php', 'courier'
        #);
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        #$this->publishes([
        #    __DIR__.'/../config/courier.php' => config_path('courier.php'),
        #]);
    }
}