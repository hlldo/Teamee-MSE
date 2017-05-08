@extends('layouts.teamee')

@section('title')
    Products
@endsection

@section('content')
<div class="parallax-product"></div>
<div class="container">
@if (Session::has('success'))
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div id="charge-message" class="alert alert-success">
      {{ Session::get('success')}}
    </div>
  </div>
</div>
@endif
<br><br>
    @foreach($products->chunk(4) as $productChunk)
    <div class="row">
  @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                <div class="caption">
                    <h4>{{$product->title}}</h4>
                    <p class="description">{{$product->description}}</p>
                    <div class="clearfix">
                        <div class="pull-left price" style="font-weight:bold; font-size:20px;">${{$product->price}}</div>
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
      @endforeach
    </div>
@endsection
