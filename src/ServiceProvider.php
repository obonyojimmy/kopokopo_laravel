<?php 

namespace Obonyojimmy\Kopokopo_laravel;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        $this->handleConfigs();
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        // Bind any implementations.
         $this->app->bind('Obonyojimmy\Kopokopo_laravel\Contract\ApiContract', 'Obonyojimmy\Kopokopo_laravel\Contract\ApiHelper');

    }

    

    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/kopokopo.php';

        $this->publishes([$configPath => config_path('kopokopo.php')]);

        $this->mergeConfigFrom($configPath, 'kopokopo_laravel');
    }

    
}
