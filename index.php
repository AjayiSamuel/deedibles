<?php
require 'vendor/autoload.php';

use App\Database as DB;
use App\Sessions;
Sessions::init();
$conn = DB::_db();

$categories = ["Cakes",
    "Chocolates",
    "Cocktails",
    "Cupcakes",
    "Dessert",
    "Edible Arrangement",
    "Edible Underwears",
    "Fruit Trees",
    "Gift Baskets",
    "Ice cream bar",
    "Small chops",
    "Snacks"];

function getVendors($category, $limit = 5)
{
    global $conn;
    $query = "SELECT * FROM vendor_info WHERE category='$category'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
	<meta charset="UTF-8">

	<!--Including links -->
	<?php
include 'layouts/head.php';
?>
</head>
<body>
<div class="mv-site">
	<!--Including header-->
	<?php
include 'layouts/header.php';
?>
	<!--Sliding section begins-->
	<section class="home-1-slideshow mv-wrap">
		<div id="home-1-slideshow" class="mv-caroufredsel">
			<ul class="mv-slider-wrapper">
				<li class="mv-slider-item"><img src="images/slideshow/cake_1920x1080.png" alt="slide"
				                                class="mv-slider-img"/>
					<div class="mv-caption-style-1">
						<div class="container">
							<div class="caption-1-text-1">Cake Factory</div>
							<div class="caption-1-text-2">
								<div class="mv-title-style-1"><img src="images/icon/icon_line_1.png" alt="icon"
								                                   class="line-left"/><img
											src="images/icon/icon_line_2.png" alt="icon" class="line-right"/>Just tell
									us what you want, We'll bake it
								</div>
							</div>
							<a href="vendors.php"
							   class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span
										class="btn-inner"><i class="btn-icon fa fa-users"></i>
										<span class="btn-text">Check Out Vendors</span></span>
							</a>
						</div>
					</div>
				</li>
				<!-- .mv-slider-item-->

				<li class="mv-slider-item"><img src="images/slideshow/icecream_1920x1080.png" alt="slide"
				                                class="mv-slider-img"/>
					<div class="mv-caption-style-1">
						<div class="container">
							<div class="caption-1-text-1">Ice cream</div>
							<div class="caption-1-text-2">
								<div class="mv-title-style-1"><img src="images/icon/icon_line_1.png" alt="icon"
								                                   class="line-left"/><img
											src="images/icon/icon_line_2.png" alt="icon" class="line-right"/>Treat
									yourself today from our finest selctions
								</div>
							</div>
							<a href="vendors.php"
							   class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2">
							   <span class="btn-inner"><i class="btn-icon fa fa-users"></i>
									<span class="btn-text">Check Out Vendors</span>
								</span>
							</a>
						</div>
					</div>
				</li>
				<!-- .mv-slider-item-->

				<li class="mv-slider-item"><img src="images/slideshow/cocktails_1920x1080.png" alt="slide"
				                                class="mv-slider-img"/>
					<div class="mv-caption-style-1">
						<div class="container">
							<div class="caption-1-text-1">Best Deals</div>
							<div class="caption-1-text-2">
								<div class="mv-title-style-1"><img src="images/icon/icon_line_1.png" alt="icon"
								                                   class="line-left"/><img
											src="images/icon/icon_line_2.png" alt="icon" class="line-right"/>Ulimited
									access to a wide variety of cocktail drinks
								</div>
							</div>
							<a href="vendors.php"
							   class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span
										class="btn-inner"><i class="btn-icon fa fa-users"></i>
										<span class="btn-text">Check Out Vendors</span></span>
							</a>
						</div>
					</div>
				</li>
				<!-- .mv-slider-item-->
			</ul>

			<button id="home-1-slideshow-prev" type="button" class="mv-slider-control-btn prev mv-btn mv-btn-style-2">
				<span class="icon fa fa-angle-left"></span></button>
			<button id="home-1-slideshow-next" type="button" class="mv-slider-control-btn next mv-btn mv-btn-style-2">
				<span class="icon fa fa-angle-right"></span></button>
		</div>
	</section>
	<!-- .home-1-slideshow-->

	<section class="home-1-highlight mv-wrap">
		<div class="container">
			<div class="mv-block-style-1">
				<div class="row block-1-list">
					<article class="col-xs-6 col-sm-4 item post">
						<div class="item-inner mv-effect-translate-1">
							<div class="content-thumb">
								<div class="thumb-inner mv-effect-relative">
									<a href="product-detail.html" title="Alpinestars GP Plus R Leather Motorcycle Jacket">
										<img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/>
									</a>
									<a href="product-detail.html" title="Alpinestars GP Plus R Leather Motorcycle Jacket" class="">
										<span class="btn-inner">

										</span>
									</a>
									<div class="content-message mv-message-style-1">
										<div class="message-inner">

										</div>
									</div>
								</div>
							</div>

							<div class="content-main">
								<div class="content-name hidden-xs hidden-sm">
									<div class="name-inner mv-overflow-ellipsis">
										Promoted
									</div>
								</div>
								<div class="content-text">
									<div class="content-price">
										<br/><br/>
										company name
									</div>
									<div class="content-desc">
                      					<a href="vendor_profile_view.php?vendor_id=<?php echo $vendor['id']; ?>" 		class="mv-overflow-ellipsis">
                      						<i class="fa fa-tag"></i>
											company's category
										</a>
									</div>
									<div class="content-desc">
										<a href="product-detail.html" title="" class="mv-overflow-ellipsis">
											<i class="fa fa-user"></i>
											company details
										</a>
									</div>
								</div>
							</div>

							<div class="content-hover">
								<div class="content-button mv-btn-group text-center">
									<div class="group-inner">
										<button type="button" title="View vendor" class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-add-to-cart">
											<span class="btn-inner">
												<i class="btn-icon fa fa-user"></i>
												<span class="btn-text">
													view vendor
												</span>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</article>

					<article class="col-xs-6 col-sm-4 item post">
						<div class="item-inner mv-effect-translate-1">
							<div class="content-thumb">
								<div class="thumb-inner mv-effect-relative">
									<a href="product-detail.html" title="Alpinestars GP Plus R Leather Motorcycle Jacket">
										<img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/>
									</a>
									<a href="product-detail.html" title="Alpinestars GP Plus R Leather Motorcycle Jacket" class="">
										<span class="btn-inner">

										</span>
									</a>
									<div class="content-message mv-message-style-1">
										<div class="message-inner">

										</div>
									</div>
								</div>
							</div>

							<div class="content-main">
								<div class="content-name hidden-xs hidden-sm">
									<div class="name-inner mv-overflow-ellipsis">
										Promoted
									</div>
								</div>
								<div class="content-text">
									<div class="content-price">
										<br/><br/>
										company name
									</div>
									<div class="content-desc">
                      					<a href="vendor_profile_view.php?vendor_id=<?php echo $vendor['id']; ?>" 		class="mv-overflow-ellipsis">
                      						<i class="fa fa-tag"></i>
											company's category
										</a>
									</div>
									<div class="content-desc">
										<a href="product-detail.html" title="" class="mv-overflow-ellipsis">
											<i class="fa fa-user"></i>
											company details
										</a>
									</div>
								</div>
							</div>

							<div class="content-hover">
								<div class="content-button mv-btn-group text-center">
									<div class="group-inner">
										<button type="button" title="View vendor" class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-add-to-cart">
											<span class="btn-inner">
												<i class="btn-icon fa fa-user"></i>
												<span class="btn-text">
													view vendor
												</span>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</article>

					<article class="col-xs-6 col-sm-4 item post">
						<div class="item-inner mv-effect-translate-1">
							<div class="content-thumb">
								<div class="thumb-inner mv-effect-relative">
									<a href="product-detail.html" title="Alpinestars GP Plus R Leather Motorcycle Jacket">
										<img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/>
									</a>
									<a href="product-detail.html" title="Alpinestars GP Plus R Leather Motorcycle Jacket" class="">
										<span class="btn-inner">

										</span>
									</a>
									<div class="content-message mv-message-style-1">
										<div class="message-inner">

										</div>
									</div>
								</div>
							</div>

							<div class="content-main">
								<div class="content-name hidden-xs hidden-sm">
									<div class="name-inner mv-overflow-ellipsis">
										Promoted
									</div>
								</div>
								<div class="content-text">
									<div class="content-price">
										<br/><br/>
										company name
									</div>
									<div class="content-desc">
                      					<a href="vendor_profile_view.php?vendor_id=<?php echo $vendor['id']; ?>" 		class="mv-overflow-ellipsis">
                      						<i class="fa fa-tag"></i>
											company's category
										</a>
									</div>
									<div class="content-desc">
										<a href="product-detail.html" title="" class="mv-overflow-ellipsis">
											<i class="fa fa-user"></i>
											company details
										</a>
									</div>
								</div>
							</div>

							<div class="content-hover">
								<div class="content-button mv-btn-group text-center">
									<div class="group-inner">
										<button type="button" title="View vendor" class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-add-to-cart">
											<span class="btn-inner">
												<i class="btn-icon fa fa-user"></i>
												<span class="btn-text">
													view vendor
												</span>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
			<!-- .mv-block-style-1-->
		</div>
	</section>
	<!-- .home-1-highlight-->

	<section class="home-1-featured-products mv-wrap">
		<div class="container">
			<div class="featured-title mv-title-style-2">
				<div class="title-2-inner"><span class="main">Featured Category</span><span class="sub"></span></div>
			</div>
			<!-- .featured-title-->

			<div class="featured-main mv-filter-style-1">
				<div class="filter-button mv-btn-group">
					<div class="group-inner">
						<?php foreach ($categories as $key => $category): ?>
						<button data-filter=".<?php echo str_replace(" ", "-", $category); ?>" class="mv-btn mv-btn-style-8 <?php echo $key == 0 ? 'active' : ''; ?>"><?php echo $category; ?></button>
<?php endforeach;?>
					</div>
				</div>
				<!-- .filter-button-->

				<div class="row filter-list-warpper">
					<div class="filter-list mv-block-style-2">
						<div class="block-2-list">
						<?php foreach ($categories as $category): ?>
						<?php foreach (getVendors(strtolower($category)) as $vendor): ?>
							<article class="col-xs-6 col-sm-4 col-md-3 item post filter-item <?php echo str_replace(" ", "-", $category); ?>">
								<div class="item-inner mv-effect-translate-1">
									<div class="content-default">
										<div class="content-thumb">
										<div class="thumb-inner mv-effect-relative">
                      <a href="vendor_profile_view.php?vendor_id=<?php echo $vendor['id']; ?>" title="<?php echo $vendor['company_name']; ?>">
                        <img src="<?php echo $vendor['logo']; ?>" alt="<?php echo $vendor['company_name']; ?>  profile image" class="mv-effect-item"/>
                      </a>
                      <a href="vendor_profile_view.php?vendor_id=<?php echo $vendor['id']; ?>" title="<?php echo $vendor['company_name']; ?>" >
                        <!--
                          class responsible for plus sign on image in above <a> tag
                          class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"
                        -->
                      <span class="btn-inner"></span>
                      </a>
                    </div>
										</div>
									</div>

									<div class="content-main">
										<div class="content-text">
										<div class="content-price">
                      <span class="new-price"><?php echo $vendor['company_name'];?>
                      </span>
                    </div>
					<div class="content-desc">
                      <span class="new-price">
                        <i class="fa fa-circle"></i>
                        <?php echo $vendor['company_description'];?>
                      </span>
                    </div>
										</div>
									</div>

									<div class="content-hover">
										<div class="content-button mv-btn-group text-center">
											<div class="group-inner">
											<a href="vendor_profile_view.php?vendor_id=<?php echo $vendor['id']; ?>" class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-compare"><span class="btn-inner"><i class="btn-icon fa fa-user"></i><span class="btn-text">view</span></span></a>
											</div>
										</div>
									</div>
								</div>
							</article>
<?php endforeach;?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				<!-- .filter-list-wrapper-->
			</div>
			<!-- .featured-main-->
		</div>
	</section>
	<!-- .home-1-featured-products-->

	<section class="home-1-shop hidden-xs hidden-sm mv-wrap">
		<div class="container">
			<div class="block-list-1">
				<div class="mv-block-style-3">
				<a href="vendors.php"class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2">
					<span class="btn-inner"><i class="btn-icon fa fa-users"></i>
						<span class="btn-text">Check Out Vendors</span>
					</span>
				</a>
					<div class="block-3-list">
						<div class="item">
							<div class="block-3-title">
								<div class="main"><a href="product-detail.html" title="Alpinestars Bionic Plus">Alpinestars
										Bionic Plus</a></div>
								<div class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
									nonummy nibh
								</div>
							</div>
							<div class="block-3-thumb"><a href="product-detail.html"
							                              title="Alpinestars Bionic Plus"><img
											src="images/demo/demo_300x400.png" alt="demo"
											class="block-3-thumb-img"/></a></div>
						</div>

						<div class="item">
							<div class="block-3-thumb"><a href="product-detail.html"
							                              title="Alpinestars Bionic Plus"><img
											src="images/demo/demo_300x400.png" alt="demo"
											class="block-3-thumb-img hidden-xs hidden-sm"/></a></div>
							<div class="block-3-title">
								<div class="main"><a href="product-detail.html" title="Alpinestars Bionic Plus">Alpinestars
										Roving Backpack</a></div>
								<div class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
								</div>
							</div>
							<div class="block-3-thumb"><a href="product-detail.html"
							                              title="Alpinestars Bionic Plus"><img
											src="images/demo/demo_300x400.png" alt="demo"
											class="block-3-thumb-img hidden-md hidden-lg"/></a></div>
						</div>
					</div>
				</div>
				<!-- .mv-block-style-3-->
			</div>
		</div>
	</section>
	<!-- .home-1-shop-->


	<section class="home-1-testimonial mv-wrap">
		<div class="container">
			<div class="testimonial-title mv-title-style-2">
				<div class="title-2-inner"><img src="images/icon/icon_m.png" alt="icon"
				                                class="icon image-live-view"/><span class="main">Testimonial</span><span
							class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</span>
				</div>
			</div>
			<!-- .testimonial-title-->

			<div class="testimonial-main">
				<div class="mv-block-style-5">
					<div id="home-1-testimonial-slider" class="mv-slick-slide">
						<div class="row">
							<div class="col-md-6 col-main">
								<div class="col-inner">
									<div class="slider gallery-main">

										<div class="slick-slide">
											<div class="slick-slide-inner">
												<div class="block-5-quote mv-quote-style-1">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell quote-icon"><i
																	class="icon fa fa-quote-left"></i></div>
														<div class="mv-dp-table-cell quote-main">
															<div class="quote-content">Duis autem vel eum iriure dolor
																in hendrerit in vulputate velit esse molestie consequat,
																vel illum dolore eu feugiat nulla facilisis at vero eros
																et accumsan et iusto odio dignissim qui blandit praesent
																luptatum zzril delenit augue duis dolore te feugait
																nulla facilisi. Nam liber tempor cum soluta nobis
																eleifend option congue nihil imperdiet doming id quod
																mazim placerat facer possim assum
															</div>
															<div class="quote-line"></div>

															<div class="block-5-profile mv-block-style-6">
																<div class="mv-dp-table">
																	<div class="mv-dp-table-cell block-6-thumb"><a
																				href="#"><span
																					style="background-image: url(images/avatar/avatar_100x100.png);"
																					class="block-6-thumb-img"></span></a>
																	</div>
																	<div class="mv-dp-table-cell block-6-main">
																		<div class="block-6-name"><a href="#">Robert
																				william</a></div>
																		<div class="block-6-office">MANAGER MOTOR
																			VERHIKLE<span class="sub">Gold Medalist, Olympics 2015</span>
																		</div>
																	</div>
																</div>
															</div>
															<!-- .block-5-profile-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner">
												<div class="block-5-quote mv-quote-style-1">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell quote-icon"><i
																	class="icon fa fa-quote-left"></i></div>
														<div class="mv-dp-table-cell quote-main">
															<div class="quote-content">Duis autem vel eum iriure dolor
																in hendrerit in vulputate velit esse molestie consequat,
																vel illum dolore eu feugiat nulla facilisis at vero eros
																et accumsan et iusto odio dignissim qui blandit praesent
																luptatum zzril delenit augue duis dolore te feugait
																nulla facilisi. Nam liber tempor cum soluta nobis
																eleifend option congue nihil imperdiet doming id quod
																mazim placerat facer possim assum
															</div>
															<div class="quote-line"></div>

															<div class="block-5-profile mv-block-style-6">
																<div class="mv-dp-table">
																	<div class="mv-dp-table-cell block-6-thumb"><a
																				href="#"><span
																					style="background-image: url(images/avatar/avatar_100x100.png);"
																					class="block-6-thumb-img"></span></a>
																	</div>
																	<div class="mv-dp-table-cell block-6-main">
																		<div class="block-6-name"><a href="#">Robert
																				william</a></div>
																		<div class="block-6-office">MANAGER MOTOR
																			VERHIKLE<span class="sub">Gold Medalist, Olympics 2015</span>
																		</div>
																	</div>
																</div>
															</div>
															<!-- .block-5-profile-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner">
												<div class="block-5-quote mv-quote-style-1">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell quote-icon"><i
																	class="icon fa fa-quote-left"></i></div>
														<div class="mv-dp-table-cell quote-main">
															<div class="quote-content">Duis autem vel eum iriure dolor
																in hendrerit in vulputate velit esse molestie consequat,
																vel illum dolore eu feugiat nulla facilisis at vero eros
																et accumsan et iusto odio dignissim qui blandit praesent
																luptatum zzril delenit augue duis dolore te feugait
																nulla facilisi. Nam liber tempor cum soluta nobis
																eleifend option congue nihil imperdiet doming id quod
																mazim placerat facer possim assum
															</div>
															<div class="quote-line"></div>

															<div class="block-5-profile mv-block-style-6">
																<div class="mv-dp-table">
																	<div class="mv-dp-table-cell block-6-thumb"><a
																				href="#"><span
																					style="background-image: url(images/avatar/avatar_100x100.png);"
																					class="block-6-thumb-img"></span></a>
																	</div>
																	<div class="mv-dp-table-cell block-6-main">
																		<div class="block-6-name"><a href="#">Robert
																				william</a></div>
																		<div class="block-6-office">MANAGER MOTOR
																			VERHIKLE<span class="sub">Gold Medalist, Olympics 2015</span>
																		</div>
																	</div>
																</div>
															</div>
															<!-- .block-5-profile-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner">
												<div class="block-5-quote mv-quote-style-1">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell quote-icon"><i
																	class="icon fa fa-quote-left"></i></div>
														<div class="mv-dp-table-cell quote-main">
															<div class="quote-content">Duis autem vel eum iriure dolor
																in hendrerit in vulputate velit esse molestie consequat,
																vel illum dolore eu feugiat nulla facilisis at vero eros
																et accumsan et iusto odio dignissim qui blandit praesent
																luptatum zzril delenit augue duis dolore te feugait
																nulla facilisi. Nam liber tempor cum soluta nobis
																eleifend option congue nihil imperdiet doming id quod
																mazim placerat facer possim assum
															</div>
															<div class="quote-line"></div>

															<div class="block-5-profile mv-block-style-6">
																<div class="mv-dp-table">
																	<div class="mv-dp-table-cell block-6-thumb"><a
																				href="#"><span
																					style="background-image: url(images/avatar/avatar_100x100.png);"
																					class="block-6-thumb-img"></span></a>
																	</div>
																	<div class="mv-dp-table-cell block-6-main">
																		<div class="block-6-name"><a href="#">Robert
																				william</a></div>
																		<div class="block-6-office">MANAGER MOTOR
																			VERHIKLE<span class="sub">Gold Medalist, Olympics 2015</span>
																		</div>
																	</div>
																</div>
															</div>
															<!-- .block-5-profile-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner">
												<div class="block-5-quote mv-quote-style-1">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell quote-icon"><i
																	class="icon fa fa-quote-left"></i></div>
														<div class="mv-dp-table-cell quote-main">
															<div class="quote-content">Duis autem vel eum iriure dolor
																in hendrerit in vulputate velit esse molestie consequat,
																vel illum dolore eu feugiat nulla facilisis at vero eros
																et accumsan et iusto odio dignissim qui blandit praesent
																luptatum zzril delenit augue duis dolore te feugait
																nulla facilisi. Nam liber tempor cum soluta nobis
																eleifend option congue nihil imperdiet doming id quod
																mazim placerat facer possim assum
															</div>
															<div class="quote-line"></div>

															<div class="block-5-profile mv-block-style-6">
																<div class="mv-dp-table">
																	<div class="mv-dp-table-cell block-6-thumb"><a
																				href="#"><span
																					style="background-image: url(images/avatar/avatar_100x100.png);"
																					class="block-6-thumb-img"></span></a>
																	</div>
																	<div class="mv-dp-table-cell block-6-main">
																		<div class="block-6-name"><a href="#">Robert
																				william</a></div>
																		<div class="block-6-office">MANAGER MOTOR
																			VERHIKLE<span class="sub">Gold Medalist, Olympics 2015</span>
																		</div>
																	</div>
																</div>
															</div>
															<!-- .block-5-profile-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->
									</div>

									<div class="slick-slide-control mv-btn-group">
										<div class="group-inner"></div>
									</div>
								</div>
								<!-- .gallery-main-->
							</div>

							<div class="col-md-6 col-thumbs hidden-xs hidden-sm">
								<div class="col-inner">
									<div class="slider gallery-thumbs">
										<div class="slick-slide">
											<div class="slick-slide-inner mv-block-style-7">
												<div style="background-image: url(images/demo/demo_800x300.png)"
												     class="block-7-bg"></div>
												<div class="block-7-polygon"><span class="polygon-inner"></span></div>
												<div class="block-7-main">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell block-7-thumb"><span
																	style="background-image: url(images/avatar/avatar_100x100.png);"
																	class="block-7-thumb-img"></span></div>
														<div class="mv-dp-table-cell block-7-detail">
															<div class="block-7-detail-inner">
																<div class="block-7-name">Robert william</div>
																<div class="block-7-office">MANAGER MOTOR VERHIKLE<span
																			class="sub">Gold Medalist, Olympics 2015</span>
																</div>
																<div class="block-7-icon-quote"><i
																			class="icon fa fa-quote-left"></i></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner mv-block-style-7">
												<div style="background-image: url(images/demo/demo_800x300.png)"
												     class="block-7-bg"></div>
												<div class="block-7-polygon"><span class="polygon-inner"></span></div>
												<div class="block-7-main">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell block-7-thumb"><span
																	style="background-image: url(images/avatar/avatar_100x100.png);"
																	class="block-7-thumb-img"></span></div>
														<div class="mv-dp-table-cell block-7-detail">
															<div class="block-7-detail-inner">
																<div class="block-7-name">Robert william</div>
																<div class="block-7-office">MANAGER MOTOR VERHIKLE<span
																			class="sub">Gold Medalist, Olympics 2015</span>
																</div>
																<div class="block-7-icon-quote"><i
																			class="icon fa fa-quote-left"></i></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner mv-block-style-7">
												<div style="background-image: url(images/demo/demo_800x300.png)"
												     class="block-7-bg"></div>
												<div class="block-7-polygon"><span class="polygon-inner"></span></div>
												<div class="block-7-main">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell block-7-thumb"><span
																	style="background-image: url(images/avatar/avatar_100x100.png);"
																	class="block-7-thumb-img"></span></div>
														<div class="mv-dp-table-cell block-7-detail">
															<div class="block-7-detail-inner">
																<div class="block-7-name">Robert william</div>
																<div class="block-7-office">MANAGER MOTOR VERHIKLE<span
																			class="sub">Gold Medalist, Olympics 2015</span>
																</div>
																<div class="block-7-icon-quote"><i
																			class="icon fa fa-quote-left"></i></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner mv-block-style-7">
												<div style="background-image: url(images/demo/demo_800x300.png)"
												     class="block-7-bg"></div>
												<div class="block-7-polygon"><span class="polygon-inner"></span></div>
												<div class="block-7-main">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell block-7-thumb"><span
																	style="background-image: url(images/avatar/avatar_100x100.png);"
																	class="block-7-thumb-img"></span></div>
														<div class="mv-dp-table-cell block-7-detail">
															<div class="block-7-detail-inner">
																<div class="block-7-name">Robert william</div>
																<div class="block-7-office">MANAGER MOTOR VERHIKLE<span
																			class="sub">Gold Medalist, Olympics 2015</span>
																</div>
																<div class="block-7-icon-quote"><i
																			class="icon fa fa-quote-left"></i></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->

										<div class="slick-slide">
											<div class="slick-slide-inner mv-block-style-7">
												<div style="background-image: url(images/demo/demo_800x300.png)"
												     class="block-7-bg"></div>
												<div class="block-7-polygon"><span class="polygon-inner"></span></div>
												<div class="block-7-main">
													<div class="mv-dp-table">
														<div class="mv-dp-table-cell block-7-thumb"><span
																	style="background-image: url(images/avatar/avatar_100x100.png);"
																	class="block-7-thumb-img"></span></div>
														<div class="mv-dp-table-cell block-7-detail">
															<div class="block-7-detail-inner">
																<div class="block-7-name">Robert william</div>
																<div class="block-7-office">MANAGER MOTOR VERHIKLE<span
																			class="sub">Gold Medalist, Olympics 2015</span>
																</div>
																<div class="block-7-icon-quote"><i
																			class="icon fa fa-quote-left"></i></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- .slick-slide-->
									</div>
								</div>
							</div>
						</div>
						<!-- .gallery-thumbs-->
					</div>
					<!-- #home-1-testimonial-slider-->
				</div>
				<!-- .mv-block-style-5-->
			</div>
			<!-- .testimonial-main-->
		</div>
	</section>
	<!-- .home-1-testimonial-->

	<section class="main-newsletter mv-newsletter-style-2 mv-wrap">
		<div class="container">
			<form method="GET" class="form-newsletter mv-form-horizontal">
				<div class="mv-form-group">
					<label class="col-xs-12 col-sm-3 hidden-xs mv-label text-right text-uppercase">Newsletter</label>
					<div class="col-xs-12 col-sm-9 mv-field">
						<div class="mv-inputbox-icon right">
							<input type="text" name="test138" data-mv-placeholder="Subscribe your email here"
							       placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-1"/>
							<button type="button" class="mv-btn mv-btn-style-4 icon"><i
										class="btn-icon fa fa-long-arrow-right"></i></button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- .mv-newsletter-style-2-->
	<!-- .footer-->
	<?php
include 'layouts/footer.php';
?>
	<!-- .footer-->
</body>
</html>