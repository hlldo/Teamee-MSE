<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>
<?php
	echo isset($pageName) ? $pageName.' - ' : ''
?>
	Teamee
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta name="utf-8">
    <meta name="keywords" content="tea, drinks, relaxation, boba">
    <meta name="description" content="#">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="css/teamee.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script type="text/javascript" src="js/teamee.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!-- for the parallax.js -->
    <script src="js/jquery-1.8.3.min.js"></script> <!-- for magnifier glass -->
    <script src="js/jquery.elevatezoom.js"></script> <!-- for magnifier glass -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<script src="js/parallax.min.js"></script> <!-- for the parallax.js -->

    <script>

    $(document).ready(function(){
        $('.modal-trigger').leanModal();
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
</head>

<header>

    <!-- Nav Bar -->
    <div class="navbar-fixed">

       <!-- Dropdown-menu for About Us LAPTOP VIEW-->
       <ul id="aboutus" class="dropdown-content">
            <li><a href="team">Team</a></li>
            <li><a href="relations">Investor Relations</a></li>
            <li><a href="fda_cleared">FDA Cleared</a></li>
            <li><a onclick="myPrompt()" href="#">Forms</a></li>
            <li class="divider"></li>
            <li><a href="supplement">Supplement</a></li>
       </ul>
        <!-- End of dropdown-menu for About Us LAPTOP VIEW-->

       <!-- Dropdown-menu for Training and Education LAPTOP VIEW -->
       <ul id="training" class="dropdown-content">
           <li><a href="LLLT_Benefits">LLLT Benefits</a></li>
           <li><a href="belg_method">BELG Method</a></li>
           <li><a href="oem_medical">OEM Medical</a></li>
           <li><a href="lms">LMS</a></li>
           <li class="divider"></li>
           <li><a href="videos">Videos</a></li>
           <li><a href="http://www.uaohs.com/index.php">Academy of Health Science</a></li>
       </ul>
       <!-- End of dopdown-menu for Training and Education LAPTOP VIEW-->

        <!-- Dropdown-menu for Centers LAPTOP VIEW -->
        <ul id="centers" class="dropdown-content">
            <li><a href="map">Map</a></li>
           <li><a href="showroom">Showroom</a></li>
            <li><a href="anaheim">Anaheim</a></li>
            <li><a href="gainesville">Gainesville</a></li>
            <li><a href="houston">Houston</a></li>
            <li><a href="kansas_city">Kansas City</a></li>
            <li><a href="lancaster">Lancaster</a></li>
            <li><a href="seportland">Portland</a></li>
           <li><a href="sandiego">San Diego</a></li>
           <li><a href="sangabriel">San Gabriel</a></li>
       </ul>
       <!-- End of dopdown-menu for Centers LAPTOP VIEW-->



       <!-- Dropdown-menu for About Us MOBILE VIEW-->
        <ul id="aboutus2" class="dropdown-content">
            <li><a href="team">Team</a></li>
            <li><a href="relations">Investor Relations</a></li>
            <li><a href="fda_cleared">FDA Cleared</a></li>
            <li><a onclick="myPrompt()" href="#">Forms</a></li>
            <li class="divider"></li>
            <li><a href="supplement">Supplement</a></li>
       </ul>
        <!-- End of dropdown-menu for About Us MOBILE VIEW-->

       <!-- Dropdown-menu for Training and Education MOBILE VIEW-->
       <ul id="training2" class="dropdown-content">
           <li><a href="LLLT_Benefits">LLLT Benefits</a></li>
           <li><a href="belg_method">BELG Method</a></li>
           <li><a href="oem_medical">OEM Medical</a></li>
           <li><a href="lms">LMS</a></li>
           <li class="divider"></li>
           <li><a href="videos">Videos</a></li>
           <li><a href="http://www.uaohs.com/index.php">Academy of Health Science</a></li>
       </ul>
       <!-- End of dopdown-menu for Training and Education MOBILE VIEW-->

        <!-- Dropdown-menu for Centers MOBILE VIEW -->
        <ul id="centers2" class="dropdown-content">
            <li><a href="map">Map</a></li>
          <li><a href="showroom">Showroom</a></li>
            <li><a href="anaheim">Anaheim</a></li>
            <li><a href="gainesville">Gainesville</a></li>
            <li><a href="houston">Houston</a></li>
            <li><a href="kansas_city">Kansas City</a></li>
            <li><a href="lancaster">Lancaster</a></li>
            <li><a href="portlandse">Portland</a></li>
           <li><a href="sandiego">San Diego</a></li>
           <li><a href="sangabriel">San Gabriel</a></li>
       </ul>
       <!-- End of dopdown-menu for Centers MOBILE VIEW-->

        <nav class="transparent" style="z-index:10;">
            <div class="nav-wrapper">

                <a href="/" class="brand-logo">
                    <img src="<?php echo $logoImg;?>" id="<?php echo $logoID;?>"/>
                </a>

                <a href="#" data-activates="mobile-view" class="button-collapse"><i class="material-icons indigo-text">menu</i></a>

                <!-- Laptop view -->
                <ul class="right hide-on-med-and-down">
                    <li><a href="/" style="font-size:12pt;">HOME</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="aboutus" style="font-size:12pt; padding:0px 20px;">ABOUT US</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="centers" style="font-size:12pt; padding:0px 20px;">CENTERS</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="training" style="font-size:12pt;">TRAINING AND EDUCATION</a></li>
                    <li><a href="contact" style="font-size:12pt;">CONTACT</a></li>
                    <li><a data-beloworigin="true" data-hover="true" class="modal-trigger waves-effect waves-light btn" href="#login" style="font-size:1.0em;background-color:#24478f;border:0px;">LOGIN</a></li>
                </ul>
                <!-- End of laptop view -->

                <!-- Mobile view-->
                <ul class="side-nav" id="mobile-view">
                    <li class="active"><a href="/">HOME</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="aboutus2">ABOUT US</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="centers2">CENTERS</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="training2">TRAINING AND EDUCATION</a></li>
                    <li><a href="contact">CONTACT</a></li>
                    <li><a data-beloworigin="true" data-hover="true" class="modal-trigger waves-effect waves-light btn" href="#login" style="font-size:1.0em;background-color:#24478f">Login</a></li>
                </ul>
                <!-- Mobile view-->

            </div>

       </nav>
    </div>


    <!-- Modal for Login -->
    <div id="login" class="modal">
        <div class="modal-content center-align">
            <h4>Login</h4>
            <div class="row">
                <form class="col s6 offset-s3">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                            <a href="#">Forget your password?</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col s12">
                     <h5>or</h5>
                        <a href="#facebook">
                            <img src="assets/image/facebook-logo.png" class="social-media" alt="facebook" style="height:40px;width:40px;"/>
                        </a>
                        <a href="#twitter">
                            <img src="assets/image/twitter-logo.png" class="social-media" style="height:40px;width:40px;"/>
                        </a>
                        <a href="#googleplus">
                             <img src="assets/image/Google_plus.png" class="social-media" style="height:42px;width:42px;"/>
                        </a>
                        <a href="#linkedin">
                            <img src="assets/image/LinkedIn_logo_initials.png" class="social-media" style="width:40px;"/>
                        </a>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <a class="waves-effect waves-light btn btn-large z-depth-3 indigo darken-4" style="width:53%;">Sign in</a>
                    <p class="center-align">
                        <input type="checkbox" class="filled-in" id="filled-in-box" />
                        <label for="filled-in-box">Keep me logged-in</label>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">New here? Join Us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of modal for Login -->
    </header>
