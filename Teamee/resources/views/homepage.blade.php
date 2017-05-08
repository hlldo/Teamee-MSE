@extends('layouts.teamee')

@section('title')
    Home
@endsection

@section('content')
<!-- Slider -->
@if(Session::has('success'))
  <div class="alert alert-info center-align">
    {{Session::get('success')}}
  </div>
@endif
       <div class="slider home-slider" >
           <ul class="slides">
               <li>
                   <img src="image/suhyeon-choi-193186.jpg">
                       <div class="caption center-align">
                           <h3 class="light grey-text text-darken-3">Teamee - Tea and Coffee house</h3>
                           <h5 class="light grey-text text-darken-3">Small Town, CA</h5>
                       </div>
               </li>

               <li>
                   <img src="image/tee-1685847_1920.jpg">
                       <div class="caption left-align">
                           <h3>A Delectable Taste</h3>
                           <h5 class="light grey-text text-lighten-3">We brew all our tea fresh for each order.</h5>
                       </div>
               </li>

               <li>
                   <img src="image/Hot-Tea.jpg">
                       <div class="caption right-align">
                           <h3>Simply Comforting</h3>
                           <h5 class="light grey-text text-lighten-3">Enjoy a hot tea on this cold weather.</h5>
                       </div>
               </li>

               <li>
                   <img src="image/fabian-blank-78639.jpg">
                       <div class="caption left-align">
                           <h3>Superior Coffee</h3>
            <h5 class="grey-text text-lighten-3">We also offer a selection of premium coffee.</h5>
                       </div>
               </li>

               <li>
                   <img src="image/tee-1680885_1920.jpg">
                       <div class="caption right-align">
                           <h3>Handcrafted Tea</h3>
                           <h5 class="light grey-text text-lighten-3">We offer a unique selection of flavors.</h5>
                       </div>
               </li>

               <li>
                   <img src="image/vicky-gu-64125.jpg">
                       <div class="caption center-align">
                           <h3>Start Your Morning Right</h3>
                           <h5 class="light grey-text text-lighten-3">Nothing like a fresh cup of tea with breakfast to kick off your day.</h5>
                       </div>
               </li>

               <li>
                   <img src="image/ravi-pinisetti-64165.jpg">
                       <div class="caption left-align">
                           <h3>High Quality Tea Harvested From the Mountains of Japan</h3>
                           <h5 class="light grey-text text-lighten-3">Savor the fresh flavors of our tea.</h5>
                       </div>
               </li>
          </ul>
   </div>
   <!-- End of slider -->
   <div class="text-center">
  <h3>Our Locations</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="image/patrick-tomasso-42345.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <img src="image/xochi-romero-111556.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>
<div class="row">
<div class="col s12 m6">
  <video class="video" autoplay loop controls>
      <source src="image/Lunch - 2339.mp4" type="video/mp4" />
      Your browser does not support this video.
  </video>


  <form action="{{ route('subscribe') }}" method="POST">
    {{ csrf_field() }}
            <input placeholder="Please input your email" id="subscribe" type="text" name="email">
            <label for="first_name">Subscribe</label>
            <input type="submit" value="Subscribe" class="btn waves-effect waves-light">

  </form>
</div>
</div>



                <div class="block">
                             <div class="block-grids">
                                 <div class="block-grid">
                                     <a href="product">
                                         <div class="block-grid-inner">
                                             <div class="img-wrapper" style="background-image: url('image/sabri-tuzcu-203093.jpg');"></div>
                                             <div class="title"><span>TEA</span></div>
                                             <div class="overlay"></div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="block-grid">
                                     <a href="product">
                                         <div class="block-grid-inner">
                                             <div class="img-wrapper" style="background-image: url('image/tim-wright-127008.jpg');"></div>
                                             <div class="title"><span>COFFEE</span></div>
                                             <div class="overlay"></div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="block-grid">
                                     <a href="product">
                                         <div class="block-grid-inner">
                                             <div class="img-wrapper" style="background-image: url('image/toa-heftiba-227086.jpg');"></div>
                                             <div class="title"><span>SNACKS</span></div>
                                             <div class="overlay"></div>
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
@endsection
@section('scripts')
<script>$('.slider').slider({height: 800});</script>
@endsection
