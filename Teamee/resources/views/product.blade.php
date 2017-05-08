<!-- Header -->
@php
$pageName='Products';
$logoImg='image/teameeLogo.png';
$logoID='logo';
include('header.php');
@endphp
<!-- End of header -->
<script>
    $(document).ready(function(){
        $('.slider').slider({height: 800});
        $(".button-collapse").sideNav();
        $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 100) { // check if user scrolled more than 50 from top of the browser window
            $("nav .nav-wrapper").css("background-color", "#f8f8f8"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
            $("nav .nav-wrapper").css("background-color", "transparent"); // if not, change it back to transparent
        }
        });
    });
</script>

<body>
    <main>
<div class="parallax-container" data-parallax="scroll" data-position="left" data-image-src="image/jade-wulfraat-96024.jpg"></div>
<div class="container">
@foreach($products->chunk(3) as $productChunk)
<div class="row">
@foreach($productChunk as $product)
<div class="col s6 m4">
  <img src="image/menu/asnim-asnim-142813.jpg" class="menuItems" alt="grilled tuna sandwhich">
  <h5 class="center-align itemName">Grilled Tuna Sandwhich</h5>


  <img src="image/menu/brina-blum-114390.jpg" class="menuItems" alt="decadent chocolate cake" >
  <h5 class="center-align itemName">Decadent Chocolate Cake</h5>


  <img src="image/menu/cecilia-par-102886.jpg" class="menuItems"alt="plate of fruits" >
  <h5 class="center-align itemName">Fruit Plate</h5>
</div>

@endforeach
</div>
@endforeach
</div>
    </main>

    <!-- Footer -->
@php
        include('footer.php');
@endphp
    <!-- End of footer -->
</body>
