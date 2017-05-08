<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Subscription;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Get all the users in DB
      $users = User::all();
      // Get all the subscriptions in DB
      $subscribers = Subscription::all();

      $orders = Order::all();
      $orders->transform(function($order, $key) {
        $order->cart = unserialize($order->cart);
        return $order;
      });
        return view('admin', ['orders' => $orders, 'users' => $users, 'subscribers' => $subscribers]);
    }
}
