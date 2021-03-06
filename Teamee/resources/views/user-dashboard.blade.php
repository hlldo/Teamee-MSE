@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1><strong> User Profile </strong></h1>
    <hr>
    <h2>My Orders</h2>
    @foreach($orders as $order)
    <div class="panel panel-default">
      <div class="panel-body">
        <p>Order Date: {{ $order['created_at']->format('m-d-Y') }}</p>
        <ul class="list-group">
          @foreach($order->cart->items as $item)
          <li class="list-group-item">
              <span class="badge"> {{ $item['price'] }} $</span>
              {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
          </li>
          @endforeach
        </ul>
      </div>
      <div class="panel-footer">
        <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
        </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
