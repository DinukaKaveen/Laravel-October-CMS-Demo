<?php namespace DinukaKaveen\Images;

use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            \DinukaKaveen\Images\Components\NewImageForm::class => 'NewImageForm',
            \DinukaKaveen\Images\Components\ImagesTable::class => 'ImagesTable',
            \DinukaKaveen\Images\Components\ViewImageForm::class => 'ViewImageForm',

        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
