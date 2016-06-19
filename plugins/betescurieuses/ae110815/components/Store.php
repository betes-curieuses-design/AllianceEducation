<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Betescurieuses\Ae110815\Models\Product;

class Store extends ComponentBase
{
    public $pageParam;

    public function componentDetails()
    {
        return [
            'name' => 'Store',
            'description' => 'Store Component'
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title' => 'Page number',
                'description' => 'rainlab.blog::lang.settings.posts_pagination_description',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'itemsPerPage' => [
                'title' => 'rainlab.blog::lang.settings.posts_per_page',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'rainlab.blog::lang.settings.posts_per_page_validation',
                'default' => '6',
            ],
            'sortOrder' => [
                'title' => 'rainlab.blog::lang.settings.posts_order',
                'description' => 'rainlab.blog::lang.settings.posts_order_description',
                'type' => 'dropdown',
                'default' => 'published_at desc'
            ],
        ];
    }

    public function onRun()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->page['products'] = $this->loadProducts();
    }

    protected function loadProducts()
    {
        $products = Product::listProducts([
            'page' => $this->property('pageNumber'),
            'sort' => $this->property('sortOrder'),
            'perPage' => $this->property('itemsPerPage'),
        ]);

        return $products;
    }

}