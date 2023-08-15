<?php

namespace Grilar\PluginGenerator\Providers;

use Grilar\Base\Supports\ServiceProvider;
use Grilar\PluginGenerator\Commands\PluginCreateCommand;
use Grilar\PluginGenerator\Commands\PluginMakeCrudCommand;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PluginCreateCommand::class,
                PluginMakeCrudCommand::class,
            ]);
        }
    }
}
