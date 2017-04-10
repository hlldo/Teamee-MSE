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
       <!-- Dropdown-menu for Menu LAPTOP VIEW -->
       <ul id="menu" class="dropdown-content">
           <li><a href="tea">Tea</a></li>
           <li><a href="coffee">Coffee</a></li>
           <li><a href="snacks">Snacks</a></li>
       </ul>
       <!-- End of dopdown-menu for Menu and Education LAPTOP VIEW-->



       <!-- Dropdown-menu for Menu MOBILE VIEW-->
       <ul id="menu" class="dropdown-content">
           <li><a href="Tea">Tea</a></li>
           <li><a href="Coffee">Coffee</a></li>
           <li><a href="Snacks">Snacks</a></li>
       </ul>
       <!-- End of dopdown-menu for Menu MOBILE VIEW-->

        <nav class="transparent" style="z-index:10;">
            <div class="nav-wrapper">

                <a href="/" class="brand-logo">
                    <img src="<?php echo $logoImg;?>" id="<?php echo $logoID;?>"/>
                </a>

                <a href="#" data-activates="mobile-view" class="button-collapse"><i class="material-icons indigo-text">menu</i></a>

                <!-- Laptop view -->
                <ul class="right hide-on-med-and-down">
                    <li><a href="/" style="font-size:12pt;">HOME</a></li>
                    <li><a href="aboutus" style="font-size:12pt;">ABOUT US</a></li>
                    <li><a href="location" style="font-size:12pt;">LOCATIONS</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="menu" style="font-size:12pt;">MENU</a></li>
                    <li><a href="contact" style="font-size:12pt;">CONTACT</a></li>
                    <li><a data-beloworigin="true" data-hover="true" class="modal-trigger waves-effect waves-light btn" href="#login" style="font-size:1.0em;background-color:#24478f;border:0px;">LOGIN</a></li>
                </ul>
                <!-- End of laptop view -->

                <!-- Mobile view-->
                <ul class="side-nav" id="mobile-view">
                    <li class="active"><a href="/">HOME</a></li>
                    <li><a href="aboutus">ABOUT US</a></li>
                    <li><a href="location" style="font-size:12pt;">LOCATIONS</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="menu2">MENU</a></li>
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
                            <img src="image/facebook-logo.png" class="social-media" alt="facebook" style="height:40px;width:40px;"/>
                        </a>
                        <a href="#twitter">
                            <img src="image/twitter-logo.png" class="social-media" style="height:40px;width:40px;"/>
                        </a>
                        <a href="#googleplus">
                             <img src="image/Google_plus.png" class="social-media" style="height:42px;width:42px;"/>
                        </a>
                        <a href="#linkedin">
                            <img src="image/LinkedIn_logo_initials.png" class="social-media" style="width:40px;"/>
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
