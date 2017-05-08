<?php

namespace App\Listeners;

use App\Events\NewOrder;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\NewOrderReceipt;
use Auth;

class SendOrderReceipt
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewOrder  $event
     * @return void
     */
    public function handle(NewOrderReceipt $event)
    {
        Mail::to($event->Auth::user()->email)->send(new NewOrderReceipt($event->order));
    }
}
