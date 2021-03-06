<?php print_r($all_products); ?>
<section class="section_offset animated transparent" data-animation="fadeInDown"> 

	<h3>New Arrivals</h3>

	<div class="tabs type_2 products">

		<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

		<ul class="tabs_nav clearfix">

			<li><a href="#tab-8">Sumon Arroma</a></li>
			<li><a href="#tab-9">Beauty</a></li>
			<li><a href="#tab-10">Personal Care</a></li>
			<li><a href="#tab-11">Vitamins &amp; Supplements</a></li>
			<li><a href="#tab-12">Baby Needs</a></li>
			<li><a href="#tab-13">Diet &amp; Fitness</a></li>
			<li><a href="#tab-14">Sexual Well-being</a></li>

		</ul>

		<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

		<div class="tab_containers_wrap">

			<div id="tab-8" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of medicine & health - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
<?php foreach($all_products as $value){ ?>


					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url().$value->product_image; ?>" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="<?php echo base_url(); ?>Welcome/product_details/<?php echo $value->id; ?>"><?php echo $value->title; ?></a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>BDT <?php echo $value->regular_price; ?></b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					<?php } ?>
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of medicine & health - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-1-->

			<div id="tab-9" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Vestibulum Iaculis Lacinia Amet 30</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$44.99</b></p>

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>
								
								<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/product_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$27.99</b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/product_img_8.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing, 2.5 fl oz (75ml)</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$44.99</b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Aenean Auctor Wisi Et Urna Ipsum 750mg, Softgels 120 ea</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$44.99</b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Aenean Auctor Wisi Et Urna Ipsum 750mg, Softgels 120 ea</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$44.99</b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Vestibulum Iaculis Lacinia Amet 30</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$44.99</b></p>

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>
								
								<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_3.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing, 2.5 fl oz (75ml)</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$44.99</b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/product_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

						<div class="description">

							<a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><b>$27.99</b></p>

							</div>

						</div>

						<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-2-->

			<div id="tab-10" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_5.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_4.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_3.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-3-->

			<div id="tab-11" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">
					
					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_3.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_4.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_5.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-4-->

			<div id="tab-12" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_4.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_3.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_5.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-5-->

			<div id="tab-13" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_5.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_4.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_1.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_3.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-6-->

			<div id="tab-14" class="tab_container">

				<!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

				<div class="owl_carousel carousel_in_tabs type_2">
					
					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_2.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/tabs_img_3.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_4.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

							<div class="clearfix product_info">

								<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

								<ul class="rating alignright">

									<li class="active"></li>
									<li class="active"></li>
									<li class="active"></li>
									<li></li>
									<li></li>

								</ul>

								<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

								<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="product_item">

						<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
						
						<div class="image_wrap">

							<img src="<?php echo base_url(); ?>assets/frontEnd/images/deals_img_5.jpg" alt="">

							<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

							<div class="actions_wrap">

								<div class="centered_buttons">

									<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

									<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

								</div><!--/ .centered_buttons -->

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

							</div><!--/ .actions_wrap-->
							
							<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

						</div><!--/. image_wrap-->

						<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

						<div class="label_new">New</div>

						<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

						<div class="description">

							<p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

							<div class="clearfix product_info">

								<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

							</div><!--/ .clearfix.product_info-->

						</div>

						<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

					</div><!--/ .product_item-->
					
					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .owl_carousel-->
				
				<!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

			</div><!--/ #tab-7-->

		</div>

		<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

	</div>

</section><!--/ .section_offset-->