<!-- Header -->
<?php
$pageName='About Us';
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
      <div class="parallax-container" style="height:600px" data-parallax="scroll" data-position="left" data-image-src="image/zachary-staines-181100.jpg"></div>
      <h1 class="text-center">About Our Farms</h1>
      <div class="container">
        <div class="row" style="padding-bottom:80px;">
          <div class="col s12 m6" style="padding-top:40px; padding-right:70px;">
            <p1 style="font-size:16pt;">We sourced all our tea from agricultural responsible farms. No artifical ingredients are used in our drinks
              all our teas are brewed from tea leaves. Get an authentic taste of real tea. All our tea leaves are organic, we sourced from farms
              that use few to no harmful pesticides. Rest assure that the taste you are getting are all just the tea flavor. Our tea are
              collected from various partner farms around the world. We carefully select the farms where our tea come from to give you the premium
              tea that you deserved.</p1>
          </div>
          <div class="col s12 m6">
            <img src="image/danurwendho-adyakusuma-20997.jpg" style="width:500px;" alt="tea farm">
          </div>
        </div>
        <h1 class="text-center">Latest Technology</h1>
          <div class="row" style="padding-bottom:80px">
          <div class="col s12 m6">
            <img src="image/rawpixel-com-211021.jpg" style="width:500px;" alt="coffee machine">
          </div>
          <div class="col s12 m6" style="padding-top:40px;">
            <p style="font-size:16pt;">We used the latest technology to brew your drinks. Each of our cafes are equipped with the newest
              machine in the market. We are ready to brew whenever you need a comforting drink. Our machines are cleaned everyday to
              ensure the highest quality.</p>
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
