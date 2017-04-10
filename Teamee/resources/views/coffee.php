<!-- Header -->
<?php
$pageName='Tea';
$logoImg='image/teameeLogo.png';
$logoID='logo';
include('header.php');
?>
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
<div class="parallax-container" style="height:700px" data-parallax="scroll" data-position="left" data-image-src="image/thomas-martinsen-29267.jpg"></div>
<div class="container">
<div class="row" style="padding-top:100px;">
  <div class="col s4 m3">
    <img src="image/coffee.jpg" style="width:300px;" alt="green tea latte">
    <h5 class="center-align">Caffe Americano</h5>
  </div>
  <div class="col s4 m3">
    <img src="image/product-capp.jpg" style="width:300px;" alt="green tea latte" >
    <h5 class="center-align">Cappuccino</h5>
  </div>
  <div class="col s4 m3">
    <img src="image/o-CAPPUCCINO-facebook.jpg" style="width:300px;" alt="green tea latte" >
    <h5 class="center-align">Mocha Crumble Latte</h5>
  </div>
  <div class="col s4 m3">
    <img src="image/Cappuccino_reg.jpg" style="width:300px;" alt="green tea latte" >
    <h5 class="center-align">Pumpkin Spice Swirl</h5>
  </div>
</div>
<div class="row">
  <div class="col s4 m3">
    <img src="image/il-mondo-in-una-tazzina-69-1.jpg" style="width:300px;" alt="green tea latte">
    <h5 class="center-align">Vanilla Latte</h5>
  </div>
  <div class="col s4 m3">
    <img src="image/espresso-shot_ecoffee_la_pavoni.jpg" style="width:300px;" alt="green tea latte" >
    <h5 class="center-align">Expresso</h5>
  </div>
  <div class="col s4 m3">
    <img src="image/macchiato-1.jpg" style="width:300px;" alt="green tea latte" >
    <h5 class="center-align">Latte Macchiato</h5>
  </div>
  <div class="col s4 m3">
    <img src="image/11115-Caramel-Macchiato.jpg" style="width:300px;" alt="green tea latte" >
    <h5 class="center-align">Caramel Macchiato</h5>
  </div>
</div>

</div>
    </main>

    <!-- Footer -->
    <?php
        include('footer.php');
    ?>
    <!-- End of footer -->
</body>
