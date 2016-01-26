<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Raviraj\Rjgallery\Models\Gallery;

class ListGallery extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'List Gallery',
            'description' => 'List Gallery Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['photos'] = Gallery::get();

    }
}