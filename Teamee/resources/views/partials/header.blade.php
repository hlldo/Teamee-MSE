<!-- Nav Bar -->
    <div class="navbar-fixed">
       <!-- Dropdown-menu for Menu LAPTOP VIEW -->
       <ul id="aboutus" class="dropdown-content">
           <li><a href="aboutus">About Us</a></li>
           <li><a href="location">Locations</a></li>
       </ul>
       <!-- End of dopdown-menu for Menu and Education LAPTOP VIEW-->

       <!-- Dropdown-menu for Menu MOBILE VIEW-->
       <ul id="aboutus2" class="dropdown-content">
         <li><a href="aboutus">About Us</a></li>
         <li><a href="location">Locations</a></li>
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
                    <img src="image/teameeLogo.png"style="width:100px;"/>
                </a>
                <!-- Show menu icon in mobile view !-->
                <a href="#" data-activates="mobile-view" class="button-collapse"><i class="material-icons indigo-text">menu</i></a>

                <!-- Laptop view -->
                <ul class="right hide-on-med-and-down" style="padding-right:60px;">
                    <li><a href="/" style="font-size:12pt;">HOME</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="aboutus" style="font-size:12pt;">ABOUT US</a></li>
                    <li><a href="product" style="font-size:12pt;">MENU</a></li>
                    <li><a href="contact" style="font-size:12pt;">CONTACT</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="login" style="font-size:12pt;">ACCESS</a></li>
                  <li ><a href="{{ route('product.shoppingCart') }}"><i style="display:inline;" class="material-icons">shopping_cart</i><span class="badge" style="margin-left:-15px;">{{ Session::has('cart') ? Session::get('cart')->totalQty: '' }}</span></a></li>
                </ul>
                <!-- End of laptop view -->

                <!-- Mobile view-->
                <ul class="side-nav" id="mobile-view">
                    <li class="active"><a href="/">HOME</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="aboutus2" style="font-size:12pt;">ABOUT US</a></li>
                    <li><a href="product" style="font-size:12pt;">MENU</a></li>
                    <li><a href="contact">CONTACT</a></li>
                    <li><a class="dropdown-button" data-beloworigin="true" data-hover="true" href="#" data-activates="login2">ACCESS</a></li>
                    <li><a href="#"><i class="large material-icons">shopping_cart</i><span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty: '' }}</span></a></li>
                </ul>
                <!-- Mobile view-->

            </div>

       </nav>
    </div>
