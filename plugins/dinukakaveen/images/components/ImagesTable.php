<?php namespace DinukaKaveen\Images\Components;

use Cms\Classes\ComponentBase;
use DinukaKaveen\Images\Models\Image;


class ImagesTable extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Image List Component',
            'description' => 'List of images'
        ];
    }

    public function onRun()
    {
        $this->page['images'] = Image::all();
    }

}
