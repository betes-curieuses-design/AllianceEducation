<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Betescurieuses\Ae110815\Models\Product;
use Betescurieuses\Ae110815\Models\OrderItem;
use Betescurieuses\Ae110815\Models\Order;
use Cookie;

class Checkout extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Checkout',
            'description' => 'Checkout Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $slug = $this->param('product');
        $cookie = $this->getCookie();
        var_dump($cookie);
        if ($cookie != '') {
            if ($slug != '') {
                $product = Product::where('slug', $slug)->isPublished()->first();
                $item = $this->checkProductInOrder($cookie, $product);
                if ($item) {
                    $this->showOrder(null, $cookie);
                }
                else {
                    $this->addProductOrder($product, $cookie);
                }
            } else {
                $this->showOrder(null, $cookie);
            }
        } else {
            if ($slug != '') {
                $cookie = str_random(40);
                $this->setCookie($cookie);
                $product = Product::where('slug', $slug)->isPublished()->first();
                $this->addProductOrder($product, $cookie);
            } else {
                //redirect
            }

        }

    }

    protected function checkProductInOrder($cookie, $product)
    {
        $order = $this->getOrder($cookie);
        $item = OrderItem::where('order_id', $order->id)
            ->where('product_id', $product->id)->first();
        return $item;
    }

    protected function addProductOrder($product, $cookie)
    {
        if ($product) {

            $this->page['product'] = $product;
            $order = $this->addOrder($product, $cookie);
            $this->addItems($product, $order);
            $this->showOrder($order);
        }

    }

    protected function addOrder($product, $cookieId)
    {
        $order = new Order;
        $order->subtotal = $product->price;
        $order->cookie_id = $cookieId;
        $order->save();
        return $order;
    }

    protected function addItems($product, $order)
    {
        $item = new OrderItem;
        $item->order_id = $order->id;
        $item->product_id = $product->id;
        $item->quantity = 1;
        $item->price = $product->price;
        $item->promotion = (($product->price * $product->price) / 100);
        $item->save();
    }

    protected function showOrder($order = null, $cookie = '')
    {
        if (is_null($order)) {
            $order = Order::where('cookie_id', $cookie)->first();
        }
        $this->page['order'] = $order;
    }

    protected function getOrder($cookie)
    {
        return Order::where('cookie_id', $cookie)->first();
    }

    protected function setCookie($id)
    {
        $cookie = Cookie::get('betescurieuses');
        if (!$cookie) {
            $cookie = Cookie::forever('betescurieuses', $id);
            var_dump($cookie);
        }
        return $cookie;
    }

    protected function getCookie()
    {
        return Cookie::get('betescurieuses');
    }

}