<?php
 if($background == null){
  $background = "images/icon/icon_line_polygon_line.png";
}
?>
<section class="main-banner mv-wrap">
        <div data-image-src="<?php echo $background;?>" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main"><?php echo $companyName;?></span></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->

      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="index.php"><i class="fa fa-home"></i></a></li>
              <li><a href="vendors.php"><i class="fa fa-group"></i></a></li>
              <!-- <li><a> <?php echo $username ?>'s Profile</a></li> -->
              <li><a> <i class="fa fa-user"></i> </a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body product-detail-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="post">
            <div class="block-info mv-box-shadow-gray-1">
              <div class="mv-block-style-27">
                <div class="mv-col-wrapper">
                  <div class="mv-col-left block-27-col-slider">
                    <div class="mv-block-style-26">
                      <div class="product-detail-slider mv-slick-slide mv-lightbox-style-1">
                        <div class="block-26-gallery-main">
                          <div class="slider gallery-main">
                          <div class="slick-slide">
                              <div class="slick-slide-inner"><a href="<?php echo $logo;?>" title="" class="mv-lightbox-item"><img src="<?php echo $logo;?>" alt="company logo" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->
                            <div class="slick-slide">
                              <div class="slick-slide-inner"><a href="<?php echo $firstImg;?>" title="" class="mv-lightbox-item"><img src="<?php echo $firstImg;?>" alt="image" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->

                            <div class="slick-slide">
                              <div class="slick-slide-inner"><a href="<?php echo $secondImg;?>" title="" class="mv-lightbox-item"><img src="<?php echo $secondImg;?>" alt="image" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->

                            <div class="slick-slide">
                              <div class="slick-slide-inner"><a href="<?php echo $thridImg;?>" title="" class="mv-lightbox-item"><img src="<?php echo $thridImg;?>" alt="image" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->

                          </div>
                        </div>
                        <!-- .block-26-gallery-main-->

                        <div class="block-26-gallery-thumbs">
                          <div class="block-26-gallery-thumbs-inner">
                            <div class="slider gallery-thumbs">
                              <div class="slick-slide">
                                <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="<?php echo $logo;?>" alt="company logo" class="block-26-thumbs-img"/></div>
                              </div>

                              <div class="slick-slide">
                                <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="<?php echo $firstImg;?>" alt="company image1" class="block-26-thumbs-img"/></div>
                              </div>

                              <div class="slick-slide">
                                <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="<?php echo $secondImg;?>" alt="company image2" class="block-26-thumbs-img"/></div>
                              </div>

                              <div class="slick-slide">
                                <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="<?php echo $thridImg;?>" alt="company image3" class="block-26-thumbs-img"/></div>
                              </div>

                            </div>

                            <div class="slick-slide-control"></div>
                          </div>
                        </div>
                        <!-- .block-26-gallery-thumbs-->
                      </div>
                      <!-- .product-detail-slider-->
                    </div>
                    <!-- .mv-block-style-26-->

                    <!-- <div onclick="$(this).remove()" class="block-27-sale-off mv-label-style-2 text-center"> -->
                      <!-- <div class="label-2-inner">
                        <ul class="label-2-ul">
                          <li class="number">-25%</li>
                          <li class="text">sale</li>
                        </ul>
                      </div>
                    </div> -->

                    <div><img src="images/demo/demo_120x40.png" alt="demo" onclick="$(this).remove()" class="block-27-logo"/></div>
                  </div>
                  <br>
                  <div class="mv-col-right block-27-col-info">
                    <div class="col-info-inner">
                      <div class="block-27-info">
                        <div class="block-27-title"><?php echo $companyName?></div>

                        <div class="block-27-desc"> <i class="fa fa-circle"></i> <?php echo $description?></div>

                        <div class="block-27-desc">
                        <i class="fa fa-tags"></i>
                           <?php echo $category?> 
                        </div>

                        <div class="block-27-desc">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                           <?php echo $phoneNo?> 
                        </div>


                        <div class="block-27-desc">
                        <i class="fa fa-home"></i> <?php echo $address?> 
                        </div>

                        <div class="block-27-desc">
                          <a href="http://<?php echo $fbLink ?>"><i class="fa fa-facebook" aria-hidden="true"></i> <?php echo $companyName?> </a>
                            
                        </div>

                        <div class="block-27-desc">
                          <a href="http://<?php echo $igLink ?>"><i class="fa fa-instagram" aria-hidden="true"></i> <?php echo $companyName?> 
                          </a>
                        </div>

                         <div class="block-27-desc">
                          <a href="http://<?php echo $igLink ?>"><i class="fa fa-instagram" aria-hidden="true"></i> <?php echo $companyName?> 
                          </a>
                        </div>

                        <div class="block-27-desc">
                          <i class="fa fa-envelope"></i> Email:<a href="mailto:name@<?php echo $vendoremail?>"> <?php echo $vendoremail?> </a>
                        </div>
                      </div>
                      <!-- .block-27-info-->

                      <div class="block-27-message content-message mv-message-style-1">
                        <div class="message-inner"></div>
                      </div>
                      <!-- .block-27-message-->
                    </div>
<?php if(!isset($_GET['vendor_id'])):?>
                    <div class="block-27-button">
                      <div class="mv-dp-table align-middle">
                        <div class="mv-dp-table-cell">
                          <div class="mv-btn-group text-left">
                            <div class="group-inner">
                                <a href="vendor_update_profile.php">
                              <button type="button" class="mv-btn mv-btn-style-1 btn-1-h-50 "><span class="btn-inner"><i class="btn-icon fa fa-upload"></i><span class="btn-text">Update details</span></span></button>
                              <!-- <span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">shop now</span></span> -->
                                </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
<?php endif;?>
                  </div>
                </div>
              </div>
              <!-- .mv-block-style-27-->
            </div>
            <!-- .block-info-->

            <div class="row block-info-more">
              <div class="col-sm-12 col-specification">
                <div class="specification-main mv-tab-style-3 mv-box-shadow-gray-1 mv-bg-white">
                  <ul role="tablist" class="tab-list nav nav-tabs">
                    <li role="presentation" class="active"><a href="#tab31" aria-controls="tab31" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i> About <?php echo $companyName?></a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="tab31" role="tabpanel" class="tab-pane active">
                      <?php
                        echo $longdescription;
                      ?>
                    </div>
                  </div>
                </div>
                <!-- .specification-main-->
              </div>

              
              </div>
            </div>
            <!-- .block-info-more-->
          </div>
          <!-- .post-->
        </div>
      </section>
      <!-- .mv-main-body-->
