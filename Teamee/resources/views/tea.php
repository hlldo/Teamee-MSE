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
<div class="parallax-container" data-parallax="scroll" data-position="left" data-image-src="image/vee-o-226.jpg"></div>
<div class="container">
<div class="row" style="padding-top:80px;">
  <div class="col s6 m3">
    <img src="image/menu/63855f1c6de9cd3e997926f88fb5f76e.jpg" class="menuItems"  alt="green tea latte">
    <h5 class="center-align itemName">Green Tea Latte</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/rosemary-tea-TS-160595872.jpg" class="menuItems"  alt="Herbal Tea" >
    <h5 class="center-align itemName">Herbal Tea</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/TheHealthBenefitsOfTea.jpg" class="menuItems"  alt="Mint Tea" >
    <h5 class="center-align itemName">Mint Tea</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/milk-tea-recipe.jpg" class="menuItems"  alt="Milk Tea" >
    <h5 class="center-align itemName">Milk Tea</h5>
  </div>
</div>
<div class="row">
  <div class="col s6 m3">
    <img src="image/menu/517828033_XS.jpg" class="menuItems"  alt="Lavender Tea">
    <h5 class="center-align itemName">Lavender Tea</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/20889058_ml.jpg" class="menuItems"  alt="Lemon Ginger Tea" >
    <h5 class="center-align itemName">Lemon Ginger Tea</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/chamomile-tea-COMP-917316.jpg" class="menuItems"  alt="Chamoile Tea" >
    <h5 class="center-align itemName">Chamoile Tea</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/green-tea-e1429210531847.jpg" class="menuItems"  alt="Green Tea" >
    <h5 class="center-align itemName">Green Tea</h5>
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
