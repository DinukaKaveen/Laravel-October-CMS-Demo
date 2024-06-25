<?php namespace DinukaKaveen\Users\Models;

use Model;

/**
 * Model
 */
class User extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'dinukakaveen_users_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
