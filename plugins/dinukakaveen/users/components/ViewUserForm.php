<?php namespace DinukaKaveen\Users\Components;

use Cms\Classes\ComponentBase;
use RainLab\User\Models\User;
use Flash;
use Input;
use Redirect;

class ViewUserForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'View User Component',
            'description' => 'View user'
        ];
    }

    public function onRun()
    {
        $userId = $this->param('id');
        $this->page['user'] = User::find($userId);
    }

    public function onUpdate()
    {
        $userId = $this->param('id');
        $user = User::find($userId);

        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->email = Input::get('email');
        $user->save();

        Flash::success('User updated successfully');
    }


    public function onDelete()
    {
        $userId = $this->param('id');
        $user = User::find($userId);
        $user->delete();

        return Redirect::to('users');
    }

}
