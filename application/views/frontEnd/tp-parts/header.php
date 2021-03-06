<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>ShopMe | Home</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/frontEnd/<?php echo base_url(); ?>assets/frontEnd/images/fav_icon.ico">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/css/fontello.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/css/bootstrap.min.css">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontEnd/css/style.css">

		<!-- JS Libs
		============================================ -->
		<script src="<?php echo base_url(); ?>assets/frontEnd/js/modernizr.js"></script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontEnd/css/oldie.css">
		<![endif]-->
	</head>
	<?php 
$contents = $this->cart->contents();

?>

	<body class="front_page">

		

		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_2">

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="sticky_part">

						<div class="container">

							<div class="row">

								<div class="main_header_row">

									<div class="col-sm-3">

										<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

										<a href="index.html" class="logo">

											<img src="<?php echo base_url(); ?>assets/frontEnd/images/logo.png" alt="">

										</a>

										<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-6 col-md-5 col-sm-6">

										<!-- - - - - - - - - - - - - - Navigation of shop - - - - - - - - - - - - - - - - -->

										<nav>

											<ul class="topbar">

												<li><a href="index.html">Home</a></li>
												<li><a href="#">My Account</a></li>
												<li><a href="#">Shopping Cart</a></li>
												<li><a href="#">Checkout</a></li>
												<li><a href="#">Blog</a></li>
												<li><a href="#">Contact us</a></li>
												<li class="has_submenu">

													<a href="#">Pages</a>

													<!-- - - - - - - - - - - - - - Submenu (level 2) - - - - - - - - - - - - - - - - -->

													<ul class="theme_menu submenu">
																
														<li class="has_submenu current">

															<a href="index.html">Homepage Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="index.html">Home 1</a></li>
																<li class="current"><a href="home_v2.html">Home 2</a></li>
																<li><a href="home_v3.html">Home 3</a></li>
																<li><a href="home_v4.html">Home 4</a></li>
																<li><a href="home_v5.html">Home 5</a></li>
																<li><a href="home_v6.html">Home 6</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="category_page_v1.html">Category Page Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="category_page_v1.html">Category page 1</a></li>
																<li><a href="category_page_v2.html">Category page 2</a></li>
																<li><a href="category_page_v3.html">Category page 3</a></li>
																<li><a href="category_page_v4.html">Category page 4</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="product_page_v1.html">Product Page Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="product_page_v1.html">Product page 1</a></li>
																<li><a href="product_page_v2.html">Product page 2</a></li>
																<li><a href="product_page_v3.html">Product page 3</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="shop_shopping_cart.html">Other Shop Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="shop_shopping_cart.html">Shopping cart</a></li>
																<li><a href="shop_checkout.html">Checkout</a></li>
																<li><a href="shop_wishlist.html">Wishlist</a></li>
																<li><a href="shop_product_comparison.html">Product Comparison</a></li>
																<li><a href="shop_my_account.html">My Account</a></li>
																<li><a href="shop_manufacturers.html">Manufacturers</a></li>
																<li><a href="shop_manufacturer_page.html">Manufacturer Page</a></li>
																<li><a href="shop_orders_list.html">Order List</a></li>
																<li><a href="shop_order_page.html">Order Page</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="additional_page_about.html">Additional Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="additional_page_about.html">About Us</a></li>
																<li><a href="additional_page_contact.html">Contact Us</a></li>
																<li><a href="additional_page_faq.html">FAQ</a></li>
																<li><a href="additional_page_404.html">404 Page</a></li>
																<li><a href="additional_page_sitemap.html">Sitemap</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="extra_stuff_elements.html">Extra Stuff</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="extra_stuff_elements.html">Elements</a></li>
																<li><a href="extra_stuff_typography.html">Typography</a></li>
																<li><a href="extra_stuff_columns.html">Columns</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="blog_v1.html">Blog Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="blog_v1.html">Blog v1</a></li>
																<li><a href="blog_v2.html">Blog v2</a></li>
																<li><a href="blog_v3.html">Blog v3</a></li>
																<li><a href="blog_post_v1.html">Blog Post v1</a></li>
																<li><a href="blog_post_v2.html">Blog Post v2</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

													</ul>

													<!-- - - - - - - - - - - - - - End submenu (level 2) - - - - - - - - - - - - - - - - -->

												</li>
												<li><a href="#" data-modal-url="modals/login.html">Login</a></li>

											</ul>

										</nav>

										<!-- - - - - - - - - - - - - - End navigation of shop - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

										<form class="clearfix search">

											<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">
											
											<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

											<div class="search_category alignleft">

												<div class="open_categories">All Categories</div>

												<ul class="categories_list dropdown">

													<li class="animated_item"><a href="#">Medicine &amp; Health</a></li>
													<li class="animated_item"><a href="#">Beauty</a></li>
													<li class="animated_item"><a href="#">Personal Care</a></li>
													<li class="animated_item"><a href="#">Vitamins &amp; Supplements</a></li>
													<li class="animated_item"><a href="#">Baby Needs</a></li>
													<li class="animated_item"><a href="#">Diet &amp; Fitness</a></li>
													<li class="animated_item"><a href="#">Sexual Well-being</a></li>

												</ul>

											</div><!--/ .search_category.alignleft-->

											<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

											<button class="button_blue def_icon_btn alignleft"></button>

										</form><!--/ #search-->
										
										<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-3 col-md-4 col-sm-3">

										<div class="clearfix">

											<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

											<div class="alignright site_settings">

												<span class="current open_"><img src="<?php echo base_url(); ?>assets/frontEnd/images/flag_en.jpg" alt="">English</span>

												<ul class="dropdown site_setting_list language">

													<li class="animated_item"><a href="#"><img src="<?php echo base_url(); ?>assets/frontEnd/images/flag_en.jpg" alt=""> English</a></li>
													<li class="animated_item"><a href="#"><img src="<?php echo base_url(); ?>assets/frontEnd/images/flag_g.jpg" alt=""> German</a></li>
													<li class="animated_item"><a href="#"><img src="<?php echo base_url(); ?>assets/frontEnd/images/flag_s.jpg" alt=""> Spanish</a></li>

												</ul>

											</div><!--/ .alignright.site_settings-->

											<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
											
											<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

											<div class="alignright site_settings currency">

												<span class="current open_">USD</span>

												<ul class="dropdown site_setting_list">

													<li class="animated_item"><a href="#">USD</a></li>
													<li class="animated_item"><a href="#">EUR</a></li>
													<li class="animated_item"><a href="#">GBP</a></li>

												</ul>

											</div><!--/ .alignright.site_settings.currency-->

											<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

										</div><!--/ .clearfix-->

										<div class="align_right v_centered">

											<!-- - - - - - - - - - - - - - Wishlist & compare counters - - - - - - - - - - - - - - - - -->

											<ul class="shop_links_list">

												<li>
													<a href="#" class="small_link"><i class="icon-heart-5"></i> Wishlist (7)</a>	
												</li>
												<li>
													<a href="#" class="small_link"><i class="icon-resize-small"></i> Compare (2)</a>
												</li>

											</ul><!--/ .align_right.shop_links-->
										
											<!-- - - - - - - - - - - - - - End of wishlist & compare counters - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Shopping cart - - - - - - - - - - - - - - - - -->

											<div class="shopping_cart_wrap">

												<button id="open_shopping_cart" class="open_button" data-amount="<?php echo $this->cart->total_items(); ?>">
													<b class="title">My Cart</b>
													<b class="total_price"><?php echo $this->cart->total(); ?></b>
												</button>

												<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

												<div class="shopping_cart dropdown">
<?php foreach ($contents as $value) : ?>


													<div class="animated_item">

												

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="<?php echo base_url().$value['options']['image']; ?>" alt="" width="60px" height="60px"></a>

															<a href="#" class="product_name"><?php echo $value['name']; ?></a>

															<p><?php echo $value['qty']; ?> x $<?php echo $value['price']; ?> = <?php echo $value['subtotal']; ?></p>

															<!-- <button class="close"></button> -->
															<a href="<?php echo base_url(); ?>Cart/delete_from_cart/<?php echo $value['rowid']; ?>">X</a>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

									<?php endforeach; ?>

													

													<div class="animated_item">

														<a href="#" class="button_grey">View Cart</a>

														<a href="#" class="button_blue">Checkout</a>

													</div><!--/ .animated_item-->

												</div><!--/ .shopping_cart.dropdown-->

												<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

											</div><!--/ .shopping_cart_wrap.align_left-->
											
											<!-- - - - - - - - - - - - - - End of shopping cart - - - - - - - - - - - - - - - - -->

										</div><!--/ .align_right-->

									</div><!--/ [col]-->

								</div><!--/ .main_header_row-->

							</div><!--/ .row-->

						</div><!--/ .container-->

					</div>

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

			</header>
			