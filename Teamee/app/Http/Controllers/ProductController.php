<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use App\Order;
use Auth;

class ProductController extends Controller
{
    public function getIndex()
    {
      $products = Product::all();
      return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
      $product = Product::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($product, $product->id);

      $request->session()->put('cart', $cart);
      return redirect()->route('product.index');
    }

    public function getReduceByOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      }
      else {
        Session::forget('cart');
      }
      return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      }
      else {
        Session::forget('cart');
      }
      return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
      if (!Session::has('cart')) {
        return view('shop.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }


    public function getCheckout()
    {
      // if (Session::has('oldUrl')) {
      //   $oldUrl =Session::get('oldUrl');
      //   Session::forget('oldUrl');
      //   return redirect()->to($oldUrl);
      // }
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
      if (!Session::has('cart')) {
          return redirect()->route('shop.shoppingCart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      \Stripe\Stripe::setApiKey(getenv('STRIPE_API_KEY'));
      try {
        $charge = Charge::create(array(
  "amount" => $cart->totalPrice * 100,
  "currency" => "usd",
  "receipt_email" => Auth::user()->email,
  "source" => $request->input('stripeToken'), // obtained with Stripe.js
  "description" => "Charge for teamee@example.com"
));
$order = new Order();
$order->cart = serialize($cart); //take php cart object and convert it into a string and store in Database
$order->address = $request->input('address');
$order->name = $request->input('name');
$order->phone = $request->input('phone');
$order->payment_id = $charge->id;

Auth::user()->orders()->save($order); //Save order to database

      } catch (\Exception $e) {
        return redirect()->route('checkout')->with('error', $e->getMessage());
      }

      Session::forget('cart');
      return redirect()->route('product.index')->with('success', 'Successfully Purchased Products!');
    }
}
