<?php

namespace Merlby\Crudify\Providers;

use Illuminate\Support\ServiceProvider;
use Merlby\Crudify\Commands\CrudifyInstallCommand;
use Merlby\Crudify\Commands\MakeCrudCommand;
use Merlby\Crudify\Commands\MigrateAutoCommand;

class CrudifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CrudifyInstallCommand::class,
                MakeCrudCommand::class,
                MigrateAutoCommand::class,
            ]);
        }

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'crudify');
    }
}
