<!-- This is main configuration File -->
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/uploads/favicon.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/rating.css">
	<link rel="stylesheet" href="assets/css/spacing.css">
	<link rel="stylesheet" href="assets/css/bootstrap-touch-slider.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/tree-menu.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

			<title>Ecommerce PHP</title>
		<meta name="keywords" content="online fashion store, garments shop, online garments">
		<meta name="description" content="ecommerce php project with mysql database">
			
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>


</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><!--
<div id="preloader">
	<div id="status"></div>
</div>-->

<!-- top bar -->
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="left">
					<ul>
						<li><i class="fa fa-phone"></i> 04577 266541</li>
						<li><i class="fa fa-envelope-o"></i> kurinjistores@gmail.com</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="right">
					<ul>
																				<li><a href="https://www.facebook.com/#"><i class="fa fa-facebook"></i></a></li>
																												<li><a href="https://www.twitter.com/#"><i class="fa fa-twitter"></i></a></li>
																																																																						<li><a href="https://www.youtube.com/#"><i class="fa fa-youtube"></i></a></li>
																												<li><a href="https://www.instagram.com/#"><i class="fa fa-instagram"></i></a></li>
																																																																																				<li><a href="https://www.whatsapp.com/#"><i class="fa fa-whatsapp"></i></a></li>
																																																																											</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="header">
	<div class="container">
		<div class="row inner">
			<div class="col-md-4 logo">
				<a href="index.php"><img src="assets/uploads/ks.logo.png" alt="logo image"></a>
			</div>
			
			<div class="col-md-5 right">
				<ul>
					
											<li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
						<li><a href="registration.php"><i class="fa fa-user-plus"></i> Register</a></li>
						
					<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart (Rs.0.00)</a></li>
				</ul>
			</div>
			<div class="col-md-3 search-area">
				<form class="navbar-form navbar-left" role="search" action="search-result.php" method="get">
					<input type="hidden" name="_csrf" value="2e9746bf1a1813c84d4c975bd3edae7b" />					<div class="form-group">
						<input type="text" class="form-control search-top" placeholder="Search Product" name="search_text">
					</div>
					<button type="submit" class="btn btn-danger">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="nav">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pl_0 pr_0">
				<div class="menu-container">
					<div class="menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							
															<li><a href="product-category.php?id=1&type=top-category">Furniture</a>
									<ul>
																					<li><a href="product-category.php?id=1&type=mid-category">Sofas&Recliners</a>
												<ul>
																											<li><a href="product-category.php?id=1&type=end-category">Leatherette Sofa Set </a></li>
																												<li><a href="product-category.php?id=2&type=end-category">Sofa</a></li>
																												<li><a href="product-category.php?id=3&type=end-category">Fabric Sofa Set</a></li>
																												<li><a href="product-category.php?id=57&type=end-category">Wooden Sofa Set</a></li>
																												<li><a href="product-category.php?id=58&type=end-category">Leather Sofa Set</a></li>
																												<li><a href="product-category.php?id=59&type=end-category">L Shapped Sofa Set</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=2&type=mid-category">Chirs</a>
												<ul>
																											<li><a href="product-category.php?id=4&type=end-category">Wooden Chirs</a></li>
																												<li><a href="product-category.php?id=5&type=end-category">Accent Chirs</a></li>
																												<li><a href="product-category.php?id=11&type=end-category">Lounge Chirs</a></li>
																												<li><a href="product-category.php?id=25&type=end-category">Bean Bags</a></li>
																												<li><a href="product-category.php?id=56&type=end-category">Bar Stools</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=8&type=mid-category">Bedroom&Mattresses</a>
												<ul>
																											<li><a href="product-category.php?id=16&type=end-category">Single Beds</a></li>
																												<li><a href="product-category.php?id=17&type=end-category">Bed-Mattres Set</a></li>
																												<li><a href="product-category.php?id=18&type=end-category">Sofa Cum Beds</a></li>
																												<li><a href="product-category.php?id=19&type=end-category">King Size Mattress</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=9&type=mid-category">Dining</a>
												<ul>
																											<li><a href="product-category.php?id=20&type=end-category">6 Seater dining Table Sets</a></li>
																												<li><a href="product-category.php?id=21&type=end-category">4 Seater dining Table Sets</a></li>
																												<li><a href="product-category.php?id=22&type=end-category">8 Seater dining Table Sets</a></li>
																												<li><a href="product-category.php?id=23&type=end-category">Dining Chirs</a></li>
																												<li><a href="product-category.php?id=24&type=end-category">Dining Benches</a></li>
																										</ul>
											</li>
																				</ul>
								</li>
																<li><a href="product-category.php?id=2&type=top-category">Home & Kitchen</a>
									<ul>
																					<li><a href="product-category.php?id=3&type=mid-category">Heating Cooling&Air Quality</a>
												<ul>
																											<li><a href="product-category.php?id=6&type=end-category">Sealing Fan</a></li>
																												<li><a href="product-category.php?id=7&type=end-category">Table Fane</a></li>
																												<li><a href="product-category.php?id=39&type=end-category">Air Conditioner</a></li>
																												<li><a href="product-category.php?id=40&type=end-category">Water Heater</a></li>
																												<li><a href="product-category.php?id=43&type=end-category">Batteries</a></li>																												
																												<li><a href="product-category.php?id=45&type=end-category">Room Heater</a></li>
																												<li><a href="product-category.php?id=46&type=end-category">Chargable Light</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=4&type=mid-category">Kitchen Accessories</a>
												<ul>
																											<li><a href="product-category.php?id=8&type=end-category">Cookware Sets</a></li>
																												<li><a href="product-category.php?id=9&type=end-category">Frying Pan</a></li>
																												<li><a href="product-category.php?id=42&type=end-category">Tawas</a></li>
																												<li><a href="product-category.php?id=47&type=end-category">Tadka Pans</a></li>
																												<li><a href="product-category.php?id=48&type=end-category">Jars&Containers</a></li>
																												<li><a href="product-category.php?id=49&type=end-category">Lunch Boxes</a></li>
																												<li><a href="product-category.php?id=60&type=end-category">knives</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=6&type=mid-category">Kitchen Electronics</a>
												<ul>
																											<li><a href="product-category.php?id=12&type=end-category">Mixer Grinder</a></li>
																												<li><a href="product-category.php?id=13&type=end-category">Grinder</a></li>
																												<li><a href="product-category.php?id=50&type=end-category">Induxen Stuve</a></li>
																												<li><a href="product-category.php?id=51&type=end-category">Microwave Owen</a></li>
																												<li><a href="product-category.php?id=52&type=end-category">Refridgerator</a></li>
																												<li><a href="product-category.php?id=53&type=end-category">Handheld Beater</a></li>
																												<li><a href="product-category.php?id=54&type=end-category">Chopper</a></li>
																												<li><a href="product-category.php?id=55&type=end-category">Dish Washer</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=7&type=mid-category">Vessels</a>
												<ul>
																											<li><a href="product-category.php?id=14&type=end-category">Plates</a></li>
																												<li><a href="product-category.php?id=15&type=end-category">Glasses</a></li>
																												<li><a href="product-category.php?id=32&type=end-category">Spoons</a></li>
																												<li><a href="product-category.php?id=33&type=end-category">Cups&Mugs</a></li>
																												<li><a href="product-category.php?id=34&type=end-category">Silver Pan</a></li>
																												<li><a href="product-category.php?id=35&type=end-category">Meat Forks</a></li>
																												<li><a href="product-category.php?id=36&type=end-category">Stanless Steel Dinner Set</a></li>
																												<li><a href="product-category.php?id=37&type=end-category">Stanless Steel Water Bottles</a></li>
																												<li><a href="product-category.php?id=38&type=end-category">Cup&soccers</a></li>
																										</ul>
											</li>
																				</ul>
								</li>
																<li><a href="product-category.php?id=3&type=top-category">Toys</a>
									<ul>
																					                        <li><a href="product-category.php?id=10&type=mid-category">Ride On Cycle</a>
												<ul>
																											<li><a href="product-category.php?id=26&type=end-category">Kick Scooters</a></li>
																												<li><a href="product-category.php?id=27&type=end-category">Trycycle</a></li>
                                                                                                                <li><a href="product-category.php?id=27&type=end-category">Magic Car</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=11&type=mid-category">Pretend & Play</a>
												<ul>
																											<li><a href="product-category.php?id=28&type=end-category">Kitchen Sets</a></li>
																												<li><a href="product-category.php?id=29&type=end-category">Tent House</a></li>
                                                                                                                <li><a href="product-category.php?id=29&type=end-category">Swords</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=12&type=mid-category">Action Games</a>
												<ul>
																											<li><a href="product-category.php?id=30&type=end-category">Toy Guns</a></li>
																													<li><a href="product-category.php?id=29&type=end-category">Tent House</a></li>
                                                                                                                    <li><a href="product-category.php?id=29&type=end-category">Bump N Go</a></li>
																										</ul>
											</li>
																				</ul>
								</li>
																<li><a href="product-category.php?id=4&type=top-category">Electronics</a>
									<ul>
																					<li><a href="product-category.php?id=14&type=mid-category">Electronic Items</a>
												<ul>
																											<li><a href="product-category.php?id=61&type=end-category">Cell Phone and Accessories</a></li>
																												<li><a href="product-category.php?id=62&type=end-category">Headphones</a></li>
																												<li><a href="product-category.php?id=63&type=end-category">Security and Surveillance</a></li>
																												<li><a href="product-category.php?id=64&type=end-category">Television and Video</a></li>
																												<li><a href="product-category.php?id=65&type=end-category">GPS and Navigation</a></li>
																												<li><a href="product-category.php?id=66&type=end-category">Home Audio</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=15&type=mid-category">Computers</a>
												<ul>
																											<li><a href="product-category.php?id=67&type=end-category">Computer Components</a></li>
																												<li><a href="product-category.php?id=68&type=end-category">Computers and Tablets</a></li>
																												<li><a href="product-category.php?id=69&type=end-category">Laptop Accessories</a></li>
																												<li><a href="product-category.php?id=70&type=end-category">Printer and Monitors</a></li>
																												<li><a href="product-category.php?id=71&type=end-category">External Components</a></li>
																												<li><a href="product-category.php?id=72&type=end-category">Networking Products</a></li>
																										</ul>
											</li>
																				</ul>
								</li>
																<li><a href="product-category.php?id=5&type=top-category">FootWear</a>
									<ul>
																					<li><a href="product-category.php?id=16&type=mid-category">Mens</a>
												<ul>
																											<li><a href="product-category.php?id=73&type=end-category">Casual Shoes</a></li>
																												<li><a href="product-category.php?id=74&type=end-category">Sports Shoes</a></li>
																												<li><a href="product-category.php?id=75&type=end-category">Sneakers</a></li>
																												<li><a href="product-category.php?id=76&type=end-category">Sandals&Floaters</a></li>
                                                                                                                <li><a href="product-category.php?id=75&type=end-category">Flip Flop</a></li>
                                                                                                                <li><a href="product-category.php?id=75&type=end-category">Socks</a></li>
																										</ul>
											</li>
																						<li><a href="product-category.php?id=17&type=mid-category">Womans</a>
												<ul>
																											<li><a href="product-category.php?id=77&type=end-category">Flats</a></li>
																												<li><a href="product-category.php?id=78&type=end-category">Casual Shoes</a></li>
																												<li><a href="product-category.php?id=79&type=end-category">Heels</a></li>
                                                                                                                <li><a href="product-category.php?id=79&type=end-category">Boots</a></li>
                                                                                                                <li><a href="product-category.php?id=79&type=end-category">Sports Shoes & Floaters</a></li>
																										</ul>
											</li>
                                            <li><a href="product-category.php?id=17&type=mid-category">Kids</a>
												<ul>
																											<li><a href="product-category.php?id=77&type=end-category">LED Light Shoes</a></li>
																												<li><a href="product-category.php?id=78&type=end-category">Schools Shoes</a></li>
																												<li><a href="product-category.php?id=79&type=end-category">Kids Slippers</a></li>
                                                                                                                <li><a href="product-category.php?id=79&type=end-category">Children Sandals</a></li>
                                                                                                                <li><a href="product-category.php?id=79&type=end-category">Kids Rubber Slippers</a></li>
																										</ul>
											</li>
																				</ul>
								</li>
								
							
							<li><a href="about.php">About Us</a></li>
							<li><a href="faq.php">FAQ</a></li>

							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

    <!-- Indicators -->
    <ol class="carousel-indicators">
                    <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#bootstrap-touch-slider" data-slide-to="1" ></li>
                        <li data-target="#bootstrap-touch-slider" data-slide-to="2" ></li>
                </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

                    <div class="item active" style="background-image:url(assets/uploads/slider-1.png);">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">Welcome to Our Shop</h1>
                            <p data-animation="animated fadeInDown">Shop Online for Latest Furniture & Home Appliances</p>
                            <a href="product-category.php?id=4&type=mid-category" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">View Furniture</a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="item " style="background-image:url(assets/uploads/slider-2.jpg);">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">50% Discount on All Products</h1>
                            <p data-animation="animated fadeInDown">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>
                            <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="item " style="background-image:url(assets/uploads/slider-3.png);">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_right">
                            <h1 data-animation="animated zoomInRight">24 Hours Customer Support</h1>
                            <p data-animation="animated fadeInRight">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>
                            <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
                </div>

    <!-- Slider Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Slider Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


<div class="service bg-gray">
    <div class="container">
        <div class="row">
                                <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/service-5.png" width="150px" alt="Easy Returns"></div>
                            <h3>Easy Returns</h3>
                            <p>
                                Return any item before 15 days!                            </p>
                        </div>
                    </div>
                                        <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/service-6.png" width="150px" alt="Free Shipping"></div>
                            <h3>Free Shipping</h3>
                            <p>
                                Enjoy free shipping inside US.                            </p>
                        </div>
                    </div>
                                        <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/service-7.png" width="150px" alt="Fast Shipping"></div>
                            <h3>Fast Shipping</h3>
                            <p>
                                Items are shipped within 24 hours.                            </p>
                        </div>
                    </div>
                                        <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/service-8.png" width="150px" alt="Satisfaction Guarantee"></div>
                            <h3>Satisfaction Guarantee</h3>
                            <p>
                                We guarantee you with our quality satisfaction.                            </p>
                        </div>
                    </div>
                                        <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/service-9.png" width="150px" alt="Secure Checkout"></div>
                            <h3>Secure Checkout</h3>
                            <p>
                                Providing Secure Checkout Options for all                            </p>
                        </div>
                    </div>
                                        <div class="col-md-4">
                        <div class="item">
                            <div class="photo"><img src="assets/uploads/service-10.png" width="150px" alt="Money Back Guarantee"></div>
                            <h3>Money Back Guarantee</h3>
                            <p>
                                Offer money back guarantee on our products                            </p>
                        </div>
                    </div>
                            </div>
    </div>
</div>

<div class="product pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Featured Products</h2>
                    <h3>Our list on Top Featured Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="product-carousel">
                    
                                            <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/chir/1.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=84">Bardot Lounge Chair In Fuschia Red Velvet Fabric</a></h3>
                                <h4>
                                    Rs.2000 
                                                                        <del>
                                                                        Rs.1700                                   </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>

                                                                    <p><a href="product.php?id=84"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/chir/2.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=86">Bardot Lounge Chair In Space Grey Velvet Fabric</a></h3>
                                <h4>
                                Rs.1790 
                                                                        <del>
                                        Rs.1990                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>

                                                                    <p><a href="product.php?id=86"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/chir/3.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=95">Florence Accent Chair In Monochrome Paisley Colour</a></h3>
                                <h4>
                                Rs.2790 
                                                                        <del>
                                                                        Rs.3290                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>

                                                                    <p><a href="product.php?id=95"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/chir/4.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=96">Owen Lounge Chair In Matte Mustard Yellow Fabric</a></h3>
                                <h4>
                                Rs.2030 
                                                                        <del>
                                                                        Rs.1590                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>

                                                                    <p><a href="product.php?id=96"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/chir/5.jpg);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=97">Chelsa Lounge Chair In Beige Fabric</a></h3>
                                <h4>
                                Rs.2500 
                                                                        <del>
                                                                        Rs.2250                                  </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>

                                                                    <p><a href="product.php?id=97"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                        </div>
            </div>
        </div>
    </div>
</div>


<div class="product bg-gray pt_70 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Latest Products</h2>
                    <h3>Our list of recently added products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="product-carousel">

                                            <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/mattress/b1.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=102">Boston Solid Wood Queen Size Box Storage Bed In Teak Finish</a></h3>
                                <h4>
                                Rs.4000 
                                                                        <del>
                                                                        Rs.4100                                  </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=102"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/mattress/b2.jpg);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=101">Weaver Metal Queen Size Bed In Black Finish</a></h3>
                                <h4>
                                Rs.2700 
                                                                        <del>
                                                                        Rs.2900                                   </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=101"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/mattress/b3.jpg);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=100">Ballito Solid Wood Queen Size Box Storage Bed In Teak Finish</a></h3>
                                <h4>
                                Rs.6500 
                                                                        <del>
                                                                        Rs.6700                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=100"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/mattress/b4.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=99">Durban Solid Wood Non Storage Queen Size Bed With Essential Foam Mattress</a></h3>
                                <h4>
                                Rs.4900 
                                                                        <del>
                                                                        Rs.5120                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=99"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/mattress/b5.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=98">Cloud Eurotop Pocket Spring Mattress With Latex</a></h3>
                                <h4>
                                Rs.8030 
                                                                        <del>
                                                                        Rs.8520                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=98"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/mattress/b6.png);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=97">Dreamlite Bonnel Spring Mattress With Eurotop</a></h3>
                                <h4>
                                Rs.4070 
                                                                        <del>
                                                                        Rs.4800                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=97"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                        
                </div>


            </div>
        </div>
    </div>
</div>


<div class="product pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Popular Products</h2>
                    <h3>Popular products based on customer's choice</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="product-carousel">

                                            <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h2.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=84">30169 Top Loading Whirlpool Semi Automatic Washing Machine 7 KG</a></h3>
                                <h4>
                                Rs.12100 
                                                                        <del>
                                                                        Rs.13900                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=84"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h3.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=92">Tropical Roti Box</a></h3>
                                <h4>
                                Rs.1100 
                                                                        <del>
                                                                        Rs.1300                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=92"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h4.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=97">Gemmy Cinnamon Wall Shelf (Vertical)</a></h3>
                                <h4>
                                Rs.3000 
                                                                        <del>
                                                                        Rs.3300                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=97"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h5.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=95">Raven Wastebasket</a></h3>
                                <h4>
                                Rs.800 
                                                                        <del>
                                                                        Rs.1000                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=95"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h6.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=96">Super Smooth Cast Iron Tawa</a></h3>
                                <h4>
                                Rs.1300 
                                                                        <del>
                                                                        Rs.1500                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=96"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h7.jpg);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=102">100% Pure Sheet Iron Tawa, Wooden Handle, Seasoned, Toxin-free, Induction, 26cm, 1kg</a></h3>
                                <h4>
                                Rs.799
                                                                        <del>
                                                                        Rs.850                                   </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=102"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h8.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=86">QuicKooker Stainless Steel 3L + 4.5L Pressure Cooker+ Free ₹600 Wood Board, 3Yr Wty, ISI, Induction</a></h3>
                                <h4>
                                Rs.4099
                                                                        <del>
                                                                        Rs.4600                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=86"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                                                <div class="item">
                            <div class="thumb">
                                <div class="photo" style="background-image:url(assets/uploads/images/home/h9.webp);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="text">
                                <h3><a href="product.php?id=94">TurboCuk Tri-ply Stainless Steel Tall Casserole/Stockpot, Glass Lid, Premium 3 Layer Body, Induction, Non-stick, 6.5L</a></h3>
                                <h4>
                                Rs.3300 
                                                                        <del>
                                                                        Rs.3600                                    </del>
                                                                    </h4>
                                <div class="rating">
                                                                                                        </div>
                                                                    <p><a href="product.php?id=94"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                                            </div>
                        </div>
                        
                </div>

            </div>
        </div>
    </div>
</div>






<section class="home-newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="single">
									<form action="" method="post">
					<input type="hidden" name="_csrf" value="2e9746bf1a1813c84d4c975bd3edae7b" />					<h2>Subscribe To Our Newsletter</h2>
					<div class="input-group">
			        	<input type="email" class="form-control" placeholder="Enter Your Email Address" name="email_subscribe">
			         	<span class="input-group-btn">
			         	<button class="btn btn-theme" type="submit" name="form_subscribe">Subscribe</button>
			         	</span>
			        </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</section>




<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12 copyright">
				Copyright 2024- Developed</div>
		</div>
	</div>
</div>


<a href="#" class="scrollup">
	<i class="fa fa-angle-up"></i>
</a>


<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
	function confirmDelete()
	{
	    return confirm("Sure you want to delete this data?");
	}
	$(document).ready(function () {
		advFieldsStatus = $('#advFieldsStatus').val();

		$('#paypal_form').hide();
		$('#stripe_form').hide();
		$('#bank_form').hide();

        $('#advFieldsStatus').on('change',function() {
            advFieldsStatus = $('#advFieldsStatus').val();
            if ( advFieldsStatus == '' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'PayPal' ) {
               	$('#paypal_form').show();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Stripe' ) {
               	$('#paypal_form').hide();
				$('#stripe_form').show();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Bank Deposit' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').show();
            }
        });
	});


	$(document).on('submit', '#stripe_form', function () {
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        $('#submit-button').prop("disabled", true);
        $("#msg-container").hide();
        Stripe.card.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            // name: $('.card-holder-name').val()
        }, stripeResponseHandler);
        return false;
    });
    Stripe.setPublishableKey('pk_test_0SwMWadgu8DwmEcPdUPRsZ7b');
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#submit-button').prop("disabled", false);
            $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
            $("#msg-container").show();
        } else {
            var form$ = $("#stripe_form");
            var token = response['id'];
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ae370d7227d3d7edc24cb96/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--></body>
</html>