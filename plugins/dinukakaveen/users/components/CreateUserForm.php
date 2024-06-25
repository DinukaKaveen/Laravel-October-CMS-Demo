<?php namespace DinukaKaveen\Users\Components;

use Cms\Classes\ComponentBase;
use DinukaKaveen\Users\Models\User;
use Flash;
use Input;
use Redirect;

class CreateUserForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Create User Component',
            'description' => 'Create new user'
        ];
    }

    public function onSubmit()
    {

        $user = new User();

        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->email = Input::get('email');
        $user->save();

        Flash::success('User created successfully');
    }


}
