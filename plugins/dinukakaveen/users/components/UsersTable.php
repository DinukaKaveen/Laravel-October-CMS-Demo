<?php namespace DinukaKaveen\Users\Components;

use Cms\Classes\ComponentBase;
use DinukaKaveen\Users\Models\User;


class UsersTable extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'User List Component',
            'description' => 'List of users'
        ];
    }

    public function onRun()
    {
        $this->page['users'] = User::all();
    }

}
