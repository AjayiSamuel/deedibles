<header class="header mv-header-style-2 mv-wrap">
        <div class="header-top">
          <div class="container">
            <div class="header-top-inner">
              <div class="mv-col-wrapper">
                <div class="mv-col-left header-contact">
                  <ul class="mv-ul clearfix group-contact hidden-xs">
                    <li class="item-button mv-icon-left-style-2"><span class="text"> <span class="icon"><i class="fa fa-clock-o"></i></span>24/7 Support</span></li>
                    <li class="item-button mv-icon-left-style-2"><a href="tel:(+800)123456789" class="text"> <span class="icon"><i class="fa fa-phone"></i></span>Telephone: (+234) 811 447 4444</a></li>
                  </ul>
                </div>
                <!-- .header-contact-->

                <div class="mv-col-right align-bottom header-account">
                  <div class="mv-btn-group text-right">
                    <div class="group-inner">
                      <div class="item-button mv-btn dropdown mv-dropdown-style-1">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="mv-btn mv-btn-style-12"><span class="btn-text hidden-xs hidden-sm">my account</span><i class="btn-icon fa fa-user hidden-md hidden-lg"></i><i class="icon fa fa-caret-down"></i></button>
                        <div class="dropdown-menu pull-right">
                          <div class="dropdown-menu-inner">
                            <nav class="mv-menu-style-3">
                              <ul>
                                <?php if(isset($_SESSION['username']) && $_SESSION !== NULL):?>
                                <?php $username = $_SESSION['username']?>
                                <li><a href="vendor_logout.php"><i class="fa fa-sign-in mv-color-primary"></i>&nbsp;
                                <?php echo "$username's session Logout"?></a>
                              </li>
<?php else:?>
                                <li><a href="vendor_login.php"><i class="fa fa-sign-in mv-color-primary"></i>&nbsp;
                                Login as a vendor</a></li>
                                <li><a href="vendor_login.php"><i class="fa fa-pencil-square-o mv-color-primary"></i>&nbsp;
                                    Register as a vendor</a></li>
<?php endif;?>
                              </ul>
                            </nav>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .header-account-->
              </div>
            </div>
          </div>
        </div>
        <!-- .header-top-->

        <div class="header-main-nav mv-fixed-enabled">
          <div class="container">
            <div class="container-inner">
              <div class="header-toggle-off-canvas hidden-md hidden-lg">
                <button type="button" class="mv-btn mv-btn-style-5 btn-off-canvas-toggle click-btn-off-canvas-left"><i class="icon fa fa-bars"></i></button>
              </div>
              <!-- .header-toggle-off-canvas-->

              <div class="header-logo"><a href="home.html" title=""><img src="images/logo/logo_white.png" alt="logo" class="logo-img img-default image-live-view"/><img src="images/logo/logo_2.png" alt="logo" class="logo-img img-scroll image-live-view"/></a></div>
              <!-- .header-logo-->

              <div class="main-nav-wrapper hidden-xs hidden-sm">
                <nav class="main-nav">
                  <ul class="nav sf-menu">
                    <li class="mega-columns"><a href="index.php"><span class="menu-text">Home <i class="menu-icon"></i></span></a></li>
                    <li><a href="#"><span class="menu-text">Categories <i class="menu-icon fa fa-angle-down"></i></span></a>
                      <ul>
                        <li><a href="#">Cakes</a></li>
                        <li><a href="#">Chocolates</a></li>
                        <li><a href="#">Cocktails</a></li>
                        <li><a href="#">Cupcakes</a></li>
                        <li><a href="#">Dessert</a></li>
                        <li><a href="#">Edible Arrangement</a></li>
                        <li><a href="#">Edible Underwears</a></li>
                        <li><a href="#">Fruit Trees</a></li>
                        <li><a href="#">Gift Baskets</a></li>
                        <li><a href="#">Ice cream bar</a></li>
                        <li><a href="#">Small chops</a></li>
                        <li><a href="#">Snacks</a></li>
                      </ul>
                    </li>
                    <li><a href="vendor_profile.php"><span class="menu-text">Profile</span></a>
                </li>
                    <li><a href="about-us.html"><span class="menu-text">About Us</span></a></li>
                    <li><a href="contact.html"><span class="menu-text">Contact</span></a></li>
                  </ul>
                </nav>
              </div>
              <!-- .header-main-nav-->

              <?php
              include 'layouts/nav.php';
              ?>
        <!-- .header-main-nav-->
      </header>
      <!-- .header-->
