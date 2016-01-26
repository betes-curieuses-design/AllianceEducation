<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Raviraj\Rjgallery\Components\Gallery;
use Raviraj\Rjgallery\Models\Gallery as Galleries;

class ItemGallery extends Gallery
{

    public function componentDetails()
    {
        return [
            'name'        => 'Item Gallery',
            'description' => 'Item Gallery Component'
        ];
    }

    public function onRun()
    {
        $this->addJs('/plugins/betescurieuses/ae110815/assets/js/lightGallery.min.js');
        $this->addCss('/plugins/betescurieuses/ae110815/assets/style/lightGallery.css');
        $gallery = new Galleries;
        $this->gallery = $this->page['gallery'] = $gallery->where('slug', $this->param('slug'))->first();

    }

    public function onRender()
    {
        // Inject all gallery properties to page.
        foreach ($this->getProperties() as $key => $value) {
            $this->page[$key] = $value;
        }
    }
}