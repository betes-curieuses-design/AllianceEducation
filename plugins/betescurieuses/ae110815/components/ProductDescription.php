<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Betescurieuses\Ae110815\Models\Product;

class ProductDescription extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Product Description',
            'description' => 'Product Description Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addJs('assets/js/product.js');
        $slug = $this->param('slug');

        $this->page['product'] = Product::where('slug', $slug)
            ->isPublished()->first();
    }

}