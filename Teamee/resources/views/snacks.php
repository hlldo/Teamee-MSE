<!-- Header -->
<?php
$pageName='Snacks';
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
<div class="parallax-container" data-parallax="scroll" data-position="left" data-image-src="image/jade-wulfraat-96024.jpg"></div>
<div class="container">
<div class="row" style="padding-top:80px;">
  <div class="col s6 m3">
    <img src="image/menu/asnim-asnim-142813.jpg" class="menuItems" alt="grilled tuna sandwhich">
    <h5 class="center-align itemName">Grilled Tuna Sandwhich</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/brina-blum-114390.jpg" class="menuItems" alt="decadent chocolate cake" >
    <h5 class="center-align itemName">Decadent Chocolate Cake</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/cecilia-par-102886.jpg" class="menuItems"alt="plate of fruits" >
    <h5 class="center-align itemName">Fruit Plate</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/eaters-collective-197218.jpg" class="menuItems" alt="Italian sandwhich" >
    <h5 class="center-align itemName">Italian Sandwhich</h5>
  </div>
</div>
<div class="row">
  <div class="col s6 m3">
    <img src="image/menu/stas-ovsky-123540.jpg" class="menuItems"alt="begal">
    <h5 class="center-align itemName">Begal</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/stephanie-mccabe-92136.jpg" class="menuItems" alt="garlic fries" >
    <h5 class="center-align itemName">Garlic Fries</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/worthy-of-elegance-6731.jpg" class="menuItems" alt="cookies" >
    <h5 class="center-align itemName">Chocolate Chip Cookies</h5>
  </div>
  <div class="col s6 m3">
    <img src="image/menu/aldyth-moyla-152340.jpg" class="menuItems" alt="Fruit Tart" >
    <h5 class="center-align itemName">Fruit Tart</h5>
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
