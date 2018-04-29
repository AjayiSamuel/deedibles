<?php
require 'vendor/autoload.php';

use App\Sessions;
use App\Database as DB;
use App\Paginator;

Sessions::init();
if (!isset($_SESSION['id'])) {
	echo "You need to be logged in to view this page";
	exit;
} else {
	$vendorid = $_SESSION['id'];


	$conn = DB::_db();
	$query = "SELECT * FROM vendor_info";

	if (!$conn) {
		$databaseerror = "could not connect to database";
		die("Connection failed: " . mysqli_connect_error($conn));
	}

    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    $paginator = new Paginator($rows,"",8);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>

	</title>
	<meta charset="UTF-8">
	<?php
	include 'layouts/head.php';
	?>
</head>
<body>
<div class="mv-site">
	<?php
	include 'layouts/header.php';
	?>
<section class="main-banner mv-wrap">
        <div data-image-src="images/background/demo_bg_1920x1680.png" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">product 3 columns</span><img src="images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->

      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="home.html"><i class="fa fa-home"></i></a></li>
              <li><a href="product-grid-3.html">Product</a></li>
              <li><a>Product 3 columns no sidebar</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body product-grid-3-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row mv-list-product-wrapper mv-block-style-9">
            <div class="block-9-list mv-list-product">

                <?php foreach($paginator->getPagination()->getItems() as $vendor): ?>
              <article class="col-xs-6 col-sm-4 item item-product-grid-2 post">
                <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                  <div class="content-thumb">
                    <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="<?php echo $vendor['logo'];?>" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="<?php echo $vendor['company_name'];?>" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

                      <div class="content-message mv-message-style-1">
                        <div class="message-inner"></div>
                      </div>
                    </div>
                  </div>

                  <div class="content-default">
                

                    <div class="content-price"><span class="new-price">$ 128.24</span><span class="old-price">$ 170.99</span></div>

                    <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis"><?php echo $vendor['company_name'];?></a></div>
                  </div>

                  <div class="content-hover">
                    <div class="content-button mv-btn-group text-center mv-lightbox-style-1">
                      <div class="group-inner">
                        <button type="button" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-compare"><span class="btn-inner"><i class="btn-icon fa fa-signal"></i><span class="btn-text">compare</span></span></button>
                        <button type="button" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button><a href="images/demo/demo_80.png" title="RST Full Zipped Sweatshirt" data-lightbox-href="product-detail.html" style="margin-right: 0;" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-zoom mv-lightbox-item hidden-xs"><i class="fa fa-search"></i></a><a href="images/demo/demo_14.png" title="RST Full Zipped Sweatshirt" data-lightbox-href="product-detail.html" class="mv-lightbox-item hidden"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <?php endforeach;?>
              <!-- .post-->

              
              <!-- .post          -->
            </div>
          </div>
          <!-- .mv-list-product-wrapper-->


          <div class="mv-pagination-wrapper">
            <div class="mv-pagination-style-1 has-count-post">
              <div class="count-post mv-title-style-10"><span class="number">12</span> Products of <span class="number">5</span> Pages</div>
              <?php
echo $paginator->getPageUrl();
?>
            </div>
            <!-- .mv-pagination-style-1-->
          </div>
          <!-- .mv-pagination-wrapper-->
        </div>
      </section>
      <!-- .mv-main-body-->

	<?php
	include 'layouts/footer.php';
	?>
</div>
</body>
</html>
