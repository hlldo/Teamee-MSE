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
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/teamee.css">
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
       <ul id="menu2" class="dropdown-content">
           <li><a href="Tea">Tea</a></li>
           <li><a href="Coffee">Coffee</a></li>
           <li><a href="Snacks">Snacks</a></li>
       </ul>
       <!-- End of dopdown-menu for Menu MOBILE VIEW-->

       <!-- Dropdown-menu for Login LAPTOP VIEW-->
       <ul id="login" class="dropdown-content">
           <li><a href="/login">Login</a></li>
           <li><a href="/register">Register</a></li>
           <hr>
           <li><a href="/admin/login">Admin Login</a></li>
       </ul>
       <!-- End of dopdown-menu for Login LAPTOP VIEW-->

       <!-- Dropdown-menu for Login MOBILE VIEW-->
       <ul id="login2" class="dropdown-content">
           <li><a href="/login">Login</a></li>
           <li><a href="/register">Register</a></li>
           <hr>
           <li><a href="/admin/login">Admin Login</a></li>
       </ul>
       <!-- End of dopdown-menu for Login MOBILE VIEW-->
        <nav class="transparent" style="z-index:10;">
            <div class="nav-wrapper">

                <a href="/" class="brand-logo">
                    <img src="<?php echo $logoImg;?>" id="<?php echo $logoID;?>"/>
                </a>

                <a href="#" data-activates="mobile-view" class="button-collapse"><i class="material-icons indigo-text">menu</i></a>

                <!-- Laptop view -->
                <ul class="right hide-on-med-and-down" style="padding-right:60px;">
                    <li><a href="/" style="font-size:12pt;">HOME</a></li>
                    <li><a href="aboutus" style="font-size:12pt;">ABOUT US</a></li>
                    <li><a href="location" style="font-size:12pt;">LOCATIONS</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="menu" style="font-size:12pt;">MENU</a></li>
                    <li><a href="contact" style="font-size:12pt;">CONTACT</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="login" style="font-size:12pt;">LOGIN</a></li>
                  <li><a href="#"><i class="large material-icons">shopping_cart</i></a></li>
                </ul>
                <!-- End of laptop view -->

                <!-- Mobile view-->
                <ul class="side-nav" id="mobile-view">
                    <li class="active"><a href="/">HOME</a></li>
                    <li><a href="aboutus">ABOUT US</a></li>
                    <li><a href="location" style="font-size:12pt;">LOCATIONS</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="menu2">MENU</a></li>
                    <li><a href="contact">CONTACT</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="login2">LOGIN</a></li>
                    <li><a href="#"><i class="large material-icons">shopping_cart</i></a></li>
                </ul>
                <!-- Mobile view-->

            </div>

       </nav>
    </div>

    </header>
