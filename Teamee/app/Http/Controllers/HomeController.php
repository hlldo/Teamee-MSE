<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NewUserWelcome;
use App\Mail\NewOrderReceipt;
use Auth;
use Session;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if (Session::has('oldUrl')) {
      $oldUrl =Session::get('oldUrl');
      Session::forget('oldUrl');
      return redirect()->to($oldUrl);
    }
       $orders = Auth::user()->orders;
       $orders->transform(function($order, $key) {
         $order->cart = unserialize($order->cart);
         return $order;
       });
        return view('user-dashboard', ['orders' => $orders]);
    }
    public function email()
    {
      //send email when a new user is created
      Mail::to(Auth::user()->email)->send(new NewUserWelcome());
        return redirect('user-dashboard');
    }
    public function getReceipt()
    {
      //send email when a new order is made
      Mail::to(Auth::user()->email)->send(new NewOrderReceipt());
        return redirect('user-dashboard');
    }
    // Show contact form view
    public function getContact()
    {
      return view('contact');
    }
    // Send contact form to Teamee's email server
    public function postContact(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'name' => 'min:2',
        'message' => 'min:5'
      ]);

      $data = array (
        'email' => $request->email,
        'name' => $request->name,
        'bodyMessage' => $request->message
      );
      Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('teamee@test.com');
        $message->subject('Teamee Contact Form');
      });

      Session::flash('success', 'Your Email was Sent!');
      return redirect()->route('contact');
    }
// Store email subscription sign up
    public function postSubscribe() {

            $subscribe        = new \App\Subscription;
            $subscribe->email = Input::get('email');
            $subscribe->save();

            Session::flash('success', 'Thank you for signing up to our subsciption!');
            return redirect()->route('homepage');
        }
}
