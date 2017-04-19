<!-- Header -->
<?php
$pageName='Coffee';
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
  <div class="col s6 m3">
    <img src="image/menu/coffee.jpg" class="menuItems" alt="green tea latte">
    <h5 class="center-align itemName">Caffe Americano</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/product-capp.jpg" class="menuItems" alt="green tea latte" >
    <h5 class="center-align itemName">Cappuccino</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/o-CAPPUCCINO-facebook.jpg" class="menuItems"alt="green tea latte" >
    <h5 class="center-align itemName">Mocha Crumble Latte</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/Cappuccino_reg.jpg" class="menuItems" alt="green tea latte" >
    <h5 class="center-align itemName">Pumpkin Spice Swirl</h5>
  </div>
</div>
<div class="row">
  <div class="col s6 m3">
    <img src="image/menu/il-mondo-in-una-tazzina-69-1.jpg" class="menuItems"alt="green tea latte">
    <h5 class="center-align itemName">Vanilla Latte</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/espresso-shot_ecoffee_la_pavoni.jpg" class="menuItems" alt="green tea latte" >
    <h5 class="center-align itemName">Expresso</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/macchiato-1.jpg" class="menuItems" alt="green tea latte" >
    <h5 class="center-align itemName">Latte Macchiato</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/11115-Caramel-Macchiato.jpg" class="menuItems" alt="green tea latte" >
    <h5 class="center-align itemName">Caramel Macchiato</h5>
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
