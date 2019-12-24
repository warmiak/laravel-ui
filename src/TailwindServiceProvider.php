<?php

namespace Warmiak\LaravelUi;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class TailwindServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tailwind', function ($command) {
            TailwindPreset::install();
            $command->info('its working !.');
        });
    }
}
