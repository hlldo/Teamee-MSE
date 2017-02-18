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
        $('.slider').slider({height: 800});
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
         <div class="container">
           <div class="row">
             <div class="col s12 m6">
               <video width="550" height="470" controls autoplay loop>
                 <source src="image/Lunch - 2339.mp4" type="video/mp4">
                   Your browser does not support the video tag.
               </video>
             </div>
             <div class="col s12 m6">
                 <p>lJDfjdl ldjfldfj adfdfa ljdljfa dfadf</p>
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
