<?php

namespace Warmiak\LaravelUi;

use Illuminate\Foundation\Console\Presets\Preset;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class TailwindPreset extends Preset
{
    public static function install()
    {
        static::updatePackages();
        static::updateSassFolder();
        static::updateJsFolder();
        static::updateViewsFolder();
        static::copyTailwindConfigs();
    }

    public static function updatePackageArray($package)
    {
        return [
            'cross-env' => '^5.1',
            'laravel-mix' => '^4.0.7',
            'lodash' => '^4.17.13',
            'axios' => '^0.19',
            'vue' => '^2.5.7',
            'tailwindcss' => '^1.1.4'
        ];
    }

    public static function updateSassFolder()
    {
        File::cleanDirectory(resource_path('sass'));
        File::copyDirectory(__DIR__.'/resources/sass', resource_path('sass'));
    }

    public static function updateJsFolder()
    {
        File::cleanDirectory(resource_path('js'));
        File::copyDirectory(__DIR__.'/resources/js', resource_path('js'));
    }

    public static function updateViewsFolder()
    {
        File::cleanDirectory(resource_path('views'));
        File::copyDirectory(__DIR__.'/resources/views', resource_path('views'));
    }

    public static function copyTailwindConfigs()
    {
        File::copy(__DIR__.'/resources/webpack.mix.js', base_path('webpack.mix.js'));
        File::copy(__DIR__.'/resources/tailwind.config.js', base_path('tailwind.config.js'));
    }

}
