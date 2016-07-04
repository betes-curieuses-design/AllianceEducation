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

        $product = Product::where('slug', $slug)
            ->isPublished()->first();
        $this->page['product'] = $product;
        $this->page->title = $product->title;
        $this->page->url = $this->pageUrl('store/item', ['slug' => $product->$slug]);
        $this->page['image_url'] = 'http://allianceeducation.ca' . $product->featured_images[0]->path;
    }

}