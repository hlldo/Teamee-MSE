@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1> <strong>Admin Dashboard </strong></h1>
    <hr>
    <h2>All Orders</h2>
    @foreach($orders as $order)
    <div class="panel panel-default">
      <div class="panel-body">
      <p style="font-size:18px;">  <strong>Order Made By: {{ $order['name'] }} </strong>
        <span style="float:right;">Order Date: {{ $order['created_at']->format('m-d-Y') }}</span></p>
        <p>Phone Number: {{ $order['phone'] }}</p>
        <ul class="list-group">
          @foreach($order->cart->items as $item)
          <li class="list-group-item">
              <span class="badge" style="color:black; background-color:white">$ {{ $item['price'] }}</span>
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
    <h2>All Users</h2>
    <div class="panel panel-default">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
          @foreach($users as $user)
    <tbody>
      <tr>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['email'] }}</td>
      </tr>
      </tr>
    </tbody>
    @endforeach
  </table>
  </div>
    <h2>Subscribers</h2>
    <div class="panel panel-default">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Subscriber's Email</th>
      </tr>
    </thead>
          @foreach($subscribers as $subscriber)
    <tbody style="border:none">
      <tr>
        <td style="border:none">{{ $subscriber['email'] }}</td>
      </tr>
      </tr>
    </tbody>
    @endforeach
  </table>
  </div>
</div>
</div>
@endsection
