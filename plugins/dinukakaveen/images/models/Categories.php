<?php namespace DinukaKaveen\Images\Models;

use Model;

/**
 * Model
 */
class Categories extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'dinukakaveen_images_categories';

    public $hasMany = [
        'images' => 'DinukaKaveen\Images\Models\Images'
    ];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
