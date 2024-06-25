<?php namespace DinukaKaveen\Users;

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
            \DinukaKaveen\Users\Components\UsersTable::class => 'UsersTable',
            \DinukaKaveen\Users\Components\CreateUserForm::class => 'CreateUserForm',
            \DinukaKaveen\Users\Components\ViewUserForm::class => 'ViewUserForm',
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
