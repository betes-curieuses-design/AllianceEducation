<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Betescurieuses\Ae110815\Models\Product;

class Store extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Store',
            'description' => 'Store Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['products'] = Product::isPublished()->get();
    }


}