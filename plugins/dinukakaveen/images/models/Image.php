<?php namespace DinukaKaveen\Images\Models;

use Model;

/**
 * Model
 */
class Image extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'dinukakaveen_images_';

    // Relationship for image
    public $attachOne = [

        'image' => 'System\Models\File'

    ];

    /*
    public $attachMany = [

        'images' => 'System\Models\File'

    ];
    */

    /**
     * @var array rules for validation.
     */
    public $rules = [

        'name' => 'required',
        'description' => 'required',
        'image' => 'required'

    ];

}
