<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Betescurieuses\Ae110815\Models\Product;
use Betescurieuses\Ae110815\Models\OrderItem;
use Betescurieuses\Ae110815\Models\Order;
use Cookie;
use Session;
use Redirect;

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
        $session = Session::get('order');

        if ($session != '') {
            $order = $this->getOrder($session);
            if ($slug != '') {
                $product = Product::where('slug', $slug)->isPublished()->first();
                $item = $this->checkProductInOrder($order, $product);

                if ($item) {
                    $this->showOrder($order);
                } else {
                    $this->addProductOrder($product, $order);
                }
            } else {
                $this->showOrder($order);
            }
        } else {
            if ($slug != '') {
                $sessionId = str_random(40);
                Session::put('order', $sessionId);
                $order = $this->addOrder($sessionId);
                $product = Product::where('slug', $slug)->isPublished()->first();
                $this->addProductOrder($product, $order);
            } else {
                return Redirect::to('boutique')->with('confirm_message', 'Il n\'y a pas d\'article dans votre panier. Consulter notre magasin dès maintenant!');
            }

        }

    }

    protected function checkProductInOrder($order, $product)
    {

        $item = OrderItem::where('order_id', $order->id)
            ->where('product_id', $product->id)->first();
        return $item;
    }

    protected function addProductOrder($product, $order)
    {
        if ($product) {

            $this->page['product'] = $product;
            $this->addItems($product, $order);
            $this->showOrder($order);
        }

    }

    protected function addOrder($cookieId)
    {
        $order = new Order;
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
        $item->promotion = (($product->price * $product->promotion) / 100);
        $rebate = ($product->price * $product->promotion) / 100;
        $item->subtotal = ($product->price - $rebate) * 1;
        $item->save();
    }

    public function onDelete()
    {
        $id = input('id');
        $order = input('order');
        OrderItem::where('product_id', $id)->where('order_id', $order)->delete();
    }

    public function onCalculate()
    {
        $total = 0;
        $id = input('order_id');
        $quantity = input('quantity');
        $productId = input('product');
        $this->updateOrderItems($id, $productId, $quantity);
        if (is_array($productId)) {
            foreach ($productId as $key => $item) {
                $product = Product::where('id', $item)->first();
                $rebate = ($product->price * $product->promotion) / 100;
                $total = $total + (($product->price - $rebate) * $quantity[$key]);
            }
        }
        $this->page['total'] = $total;
    }

    public function onSubmit()
    {
        $data = input();
        $this->updateOrderItems($data['order_id'], $data['product'], $data['quantity']);
        $order = $this->setFinalOrder($data);
        $this->sendConfirmationEmail($order);
        return Redirect::to('boutique')->with('confirm_message', 'Login Failed');

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

    protected function updateOrderItems($order, $product, $quantity)
    {
        if (is_array($product)) {
            foreach ($product as $key => $item) {
                $prod = Product::where('id', $item)->first();
                $rebate = ($prod->price * $prod->promotion) / 100;
                OrderItem::where('order_id', $order)
                    ->where('product_id', $item)->update(
                        [
                            'quantity' => $quantity[$key],
                            'subtotal' => ($quantity[$key]* ($prod->price - $rebate))
                        ]
                    );
            }
        }
    }

    protected function setFinalOrder($data)
    {
        $order = Order::where('id', $data['order_id'])->first();
        $order->subtotal = $data['subtotal'];
        $order->tps = $data['tps'];
        $order->tvp = $data['tvp'];
        $order->total = $data['total'];
        $order->first_name = $data['first_name'];
        $order->last_name = $data['last_name'];
        $order->email = $data['email'];
        $order->phone = $data['phone'];
        $order->address = $data['address'];
        $order->zip = $data['zip'];
        $order->city = $data['city'];
        $order->province = $data['province'];
        $order->temporary = 0;
        $order->save();
        return $order;
    }

    protected function sendConfirmationEmail($order)
    {
        $data['logo'] = "http://allianceeducation.ca/themes/ae110815/assets/images/logo-alliance-education.jpg";
        $data['social'] = [
            'fb' => 'http://allianceeducation.ca/themes/ae110815/assets/images/facebook-icon.png',
            'you' => 'http://allianceeducation.ca/themes/ae110815/assets/images/youtube-icon.png',
            'in' => 'http://allianceeducation.ca/themes/ae110815/assets/images/linkedin-icon.png'
        ];
        $data['order'] = $order;
        \Mail::send('betescurieuses.ae110815::mail.order_mail' , $data, function ($message) use ($data) {
            //$message->to($data['email_to']);
            $message->bcc('alexfoisy@betescurieuses.com');
            $message->to('lorajc@hotmail.com');
        });
    }

    protected function setCookie($id)
    {
        $cookie = Cookie::get('betescurieuses');
        if (!$cookie) {
            $cookie = Cookie::forever('betescurieuses', $id);
        }
        return $cookie;
    }

    protected function getCookie()
    {
        return Cookie::get('betescurieuses');
    }

}