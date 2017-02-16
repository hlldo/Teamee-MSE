<!-- Header -->
<?php
$pageName='Homepage';
$logoImg='image/teameeLogo.png';
$logoID='logo';
include('header.php');
?>
<!-- End of header -->
<script>
    $(document).ready(function(){
        $('.slider').slider({height: 1000});
        $(".button-collapse").sideNav();
        $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
            $("nav .nav-wrapper").css("background-color", "#f8f8f8"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
            $("nav .nav-wrapper").css("background-color", "transparent"); // if not, change it back to transparent
        }
        });
    });
</script>
<body>

    <main>
      <!-- Slider -->
             <div class="slider home-slider" >
                 <ul class="slides">
                     <li>
                         <img src="image/smoothie.jpg">
                             <div class="caption center-align">
                                 <h3>Teamee - Tea and Coffee house</h3>
                                 <h5 class="light grey-text text-lighten-3">Small Town, CA</h5>
                             </div>
                     </li>

                     <li>
                         <img src="image/icedtea.jpg">
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
                         <img src="image/teapot.jpg">
                             <div class="caption left-align">
                                 <h3>Order a Whole Pot for the Day</h3>
     							<h5 class="grey-text text-darken-2">Share a pot of tea with your friends.</h5>
                             </div>
                     </li>

                     <li>
                         <img src="image/maxresdefault.jpg">
                             <div class="caption right-align">
                                 <h3>Awesome Containers</h3>
                                 <h5 class="light grey-text text-lighten-3">Unique containers avaliable.</h5>
                             </div>
                     </li>

                     <li>
                         <img src="image/maxresdefault.jpg">
                             <div class="caption center-align">
                                 <h3></h3>
                                 <h5 class="light grey-text text-lighten-3"></h5>
                             </div>
                     </li>

                     <li>
                         <img src="image/maxresdefault.jpg">
                             <div class="caption left-align">
                                 <h3></h3>
                                 <h5 class="light grey-text text-lighten-3"></h5>
                             </div>
                     </li>
                </ul>
         </div>
         <!-- End of slider -->
    </main>

    <!-- Footer -->
    <?php
        include('footer.php');
    ?>
    <!-- End of footer -->
</body>
