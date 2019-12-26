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
        static::copyRoutesFile();
    }

    public static function updatePackageArray($package)
    {
        return [
            'axios' => '^0.19',
            'cross-env' => '^5.1',
            'laravel-mix' => '^4.0.7',
            'lodash' => '^4.17.13',
            'sass' => '^1.24.0',
            'sass-loader' => '^7.3.1',
            'tailwindcss' => '^1.1.4',
            'vue' => '^2.5.7',
            'vue-template-compiler' => '^2.6.11'
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

    public static function copyRoutesFile()
    {
        if (File::exists(base_path('/routes/web.php'))) {
            File::delete(base_path('/routes/web.php'));
        }
        File::copy(__DIR__.'/resources/web.php', base_path('/routes/web.php'));
    }

}
