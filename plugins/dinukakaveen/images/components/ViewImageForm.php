<?php namespace DinukaKaveen\Images\Components;

use Cms\Classes\ComponentBase;
use DinukaKaveen\Images\Models\Image;
use System\Models\File;
use Input;
use Flash;
use Redirect;

class ViewImageForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'View Image Component',
            'description' => 'View an image details'
        ];
    }


    public function onRun()
    {
        $imageId = $this->param('id');
        $this->page['image'] = Image::find($imageId);
    }


    public function onUpdate()
    {
        $imageId = $this->param('id');
        $image = Image::find($imageId);

        $image->name = Input::get('name');
        $image->description = Input::get('description');
        $image->image = Input::file('image');
        $image->save();

        Flash::success('Image updated successfully');
    }


    public function onDelete()
    {
        $imageId = $this->param('id');
        $image = Image::find($imageId);
        $image->delete();
        return Redirect::to('images');
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
