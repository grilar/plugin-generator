<?php

namespace Grilar\PluginGenerator\Providers;

use Grilar\Base\Supports\ServiceProvider;

class PluginGeneratorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(CommandServiceProvider::class);
    }
}
