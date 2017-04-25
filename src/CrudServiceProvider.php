<?php

namespace Roland\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
          if ($this->app->runningInConsole()) {
                $this->commands([
                    Commands\CrudCommand::class,
                    Commands\CrudControllerCommand::class,
                    Commands\CrudModelCommand::class,
                    Commands\CrudMigrationCommand::class,
                    Commands\CrudViewCommand::class,
                    Commands\PivotMigrationCommand::class,
                    
                ]);
            }

     }

}
