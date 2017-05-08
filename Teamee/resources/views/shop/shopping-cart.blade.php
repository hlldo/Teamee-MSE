@extends('layouts.teamee')

@section('title')
    Shopping Cart
@endsection

@section('content')
<h1 class="center-align"><strong>Shopping Cart</strong></h1>
  @if(Session::has('cart'))
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
          @foreach($products as $product)
            <li class="list-group-item">
              <span class="badge" style="background-color:white;">{{ $product['qty'] }}</span>
              <img src="{{ $product['item']['imagePath']}}" style="width:100px;">
              <strong>{{ $product['item']['title'] }} </strong>
              <span>$ {{ $product['price'] }}</span>
               <div class="btn-group">
  <button style="font-size:10px; height:30px; padding:0 1rem; line-height:30px; background-color:#337ab7" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Remove
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">One</a></li>
    <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">All</a></li>
  </ul>
</div>

              <!-- Dropdown Trigger -->
                <!-- <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Remove</a>
                <!- Dropdown Structure -->
                  <!-- <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">One</a></li>
                  <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">All</a></li>
                </ul> -->
              </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h5><strong>Total: ${{ $totalPrice }}</strong></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <a href="{{ route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
      </div>
    </div>

  @else
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2>No Items in Cart!</h2>
    </div>
  </div>
  @endif
@endsection
@section('scripts')
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
