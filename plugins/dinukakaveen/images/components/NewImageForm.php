<?php namespace DinukaKaveen\Images\Components;

use Cms\Classes\ComponentBase;
use DinukaKaveen\Images\Models\Image;
use System\Models\File;
use ValidationException;
use Flash;
use Input;
use Redirect;

class NewImageForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Post New Image Component',
            'description' => 'Upload a new image'
        ];
    }

    public function onSubmit()
    {

        $image = new Image();

        $image->name = Input::get('name');
        $image->description = Input::get('description');
        $image->image = Input::file('image');
        $image->save();

        Flash::success('Image uploaded successfully');

        //return Redirect::back();
    }

    public function onImageUpload()
    {
        $image = Input::all();

        $file = (new File())->fromPost($image['image']);

        return [
            '#imagePreview' => '<img src="'.$file->getThumb(300, 300, ['mode' => 'auto']).'" />',
        ];
    }


}
