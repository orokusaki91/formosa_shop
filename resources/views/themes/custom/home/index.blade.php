@extends('shop::layouts.custom.app')

@section('page_title')
    {{ __('shop::app.home.page-title') }}
@endsection

@section('content-wrapper')
	<header>
		<div id="navbar">
			<div id="header_nav" class="container">


				<div class="logo">
					<a href="index.html"><img src="{{ bagisto_asset('images/logo.png') }}" alt="formosa logo" title="formosa logo"></a>
				</div>


				<a href="#" class="nav-button"><i class="fa fa-bars" aria-hidden="true"></i></a>

				<nav class="nav">
					<ul>
						<li><a href="index.html">Pocetna</a></li>
						<li><a href="#">Shop</a></li>
						<li class="nav-submenu"><a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Lorem ipsum</a></li>
								<li class="nav-submenu"><a href="#">Lorem <i class="fa fa-angle-double-right" aria-hidden="true"></i>
									</a>
									<ul>
										<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Lorem ipsum</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="{{ route('about_us') }}">About ts</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
					</ul>

				</nav>

				<div class="acc_bag">
					<div class="nav_login">
						<a onclick="myFunction()"><i class="fa fa-user" aria-hidden="true"></i>
						</a>
						<div class="loginreg_div">
							<a href="login">LOGIN</a>
							<a href="register">REGISTER</a>
						</div>
						<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
					</div>
				</div>

			</div>
		</div>
	</header>

	<main>
		<!-- slider -->
		<!-- slider -->
		<div id="slider" class="cf">
			<ul class="bxslider">
				<li>
					<img src="{{ bagisto_asset('images/custom/imageSlider/1.jpg') }}" alt="" />
					<div class="slide-desc">
						<div class="container">
							<h2>Slider Title 3</h2>
							<p>This is the third picture in the slider. <a class="more" href="#">Pogledaj</a></p>
						</div>
					</div>
				</li>
				<li>
					<img src="{{ bagisto_asset('images/custom/imageSlider/2.jpg') }}" alt="" />
					<div class="slide-desc">
						<div class="container">
							<h2>Slider Title 2</h2>
							<p>This is the third picture in the slider. <a class="more" href="#">Pogledaj</a></p>
						</div>
					</div>
				</li>
				<li>
					<img src="{{ bagisto_asset('images/custom/imageSlider/3.jpg') }}" alt="" />
					<div class="slide-desc">
						<div class="container">
							<h2>Slider Title 4</h2>
							<p>Shorter description. <a class="more" href="#">Pogledaj</a></p>
						</div>
					</div>
				</li>
				<li>
					<img src="{{ bagisto_asset('images/custom/imageSlider/4.jpg') }}" alt="" />
					<div class="slide-desc">
						<div class="container">
							<h2>Slider Title 5</h2>
							<p>Shorter description. <a class="more" href="#">Pogledaj</a></p>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<!-- kraj slider -->
		<!-- kraj slider -->


		<div id="twoproduct">
			<div class="container">
				<div class="row">
					<div class="col-1-2">
						<a href="{{ route('shop.categories.index', ['slug' => 1]) }}">
							<img src="{{ bagisto_asset('images/custom/twoproduct_1.jpg') }}" alt="" class="cov">
							<p>Lorem</p>
							<h5>Ako ima potrebe, kratak opis</h5>
						</a>
					</div>
					<div class="col-1-2">
						<a href="{{ route('shop.categories.index', ['slug' => 1]) }}">
							<img src="{{ bagisto_asset('images/custom/twoproduct_2.jpg') }}" alt="" class="cov">
							<p>Lorem</p>
							<h5>Ako ima potrebe, kratak opis</h5>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="trendingthisweek">
			<div class="container">
				<h3>Trending This Week</h3>
				<p class="shortdesc">Ako ima potrebe, kratak opis...</p>
				<div class="row">
					<div class="col-1-4">
						<a href="{{ route('shop.products.index', ['slug' => 1]) }}">
							<div class="viewproducts">
								<img src="{{ bagisto_asset('images/custom/trengingthisweek1.jpg') }}" alt="" class="cov2">
								<p class="viewproduct">VIEW</p>
							</div>
							<h4>Lorem ipsum</h4>
							<p class="price">$129.99</p>
						</a>
					</div>
					<div class="col-1-4">
						<a href="{{ route('shop.products.index', ['slug' => 1]) }}">
							<div class="viewproducts">
								<img src="{{ bagisto_asset('images/custom/trengingthisweek2.jpg') }}" alt="" class="cov2">
								<p class="viewproduct">VIEW</p>
							</div>
							<h4>Lorem ipsum</h4>
							<p class="price">$129.99</p>
						</a>
					</div>
					<div class="col-1-4">
						<a href="{{ route('shop.products.index', ['slug' => 1]) }}">
							<div class="viewproducts">
								<img src="{{ bagisto_asset('images/custom/trengingthisweek3.jpg') }}" alt="" class="cov2">
								<p class="viewproduct">VIEW</p>
							</div>
							<h4>Lorem ipsum</h4>
							<p class="price">$129.99</p>
						</a>
					</div>
					<div class="col-1-4">
						<a href="{{ route('shop.products.index', ['slug' => 1]) }}">
							<div class="viewproducts">
								<img src="{{ bagisto_asset('images/custom/trengingthisweek4.jpg') }}" alt="" class="cov2">
								<p class="viewproduct">VIEW</p>
							</div>
							<h4>Lorem ipsum</h4>
							<p class="price">$129.99</p>
						</a>
					</div>
				</div>
			</div>
		</div>


		<div id="newinproduct">
			<div class="container">
				<h3>New in product</h3>
				<p class="shortdesc">Ako ima potrebe, kratak opis...</p>
				<div class="dflex">
					<div class="first">
						<a href="#">
							<img src="{{ bagisto_asset('images/custom/newinproduct_main.jpg') }}" alt="">
							<h4>Lorem ipsum</h4>
						</a>
					</div>

					<div class="second">
						<div class="second_a">
							<div class="row">
								<div class="col-1-2">
									<a href="#">
										<img class="cov" src="{{ bagisto_asset('images/custom/newinproduct_first.jpg') }}" alt="">
										<h4>Lorem ipsum</h4>
										<p>$184.44</p>
									</a>
								</div>
								<div class="col-1-2">
									<a href="#">
										<img class="cov" src="{{ bagisto_asset('images/custom/newinproduct_second.jpg') }}" alt="">
										<h4>Lorem ipsum</h4>
										<p>$184.44</p>
									</a>
								</div>
							</div>
						</div>
						<div class="second_b">
							<div class="row">
								<div class="col-1-2">
									<a href="#">
										<img class="cov" src="{{ bagisto_asset('images/custom/newinproduct_third.jpg') }}" alt="">
										<h4>Lorem ipsum</h4>
										<p>$184.44</p>
									</a>
								</div>
								<div class="col-1-2">
									<a href="#">
										<img class="cov" src="{{ bagisto_asset('images/custom/newinproduct_fourth.jpg') }}" alt="">
										<h4>Lorem ipsum</h4>
										<p>$184.44</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="fixedquote">
			<div class="aluimg" style="background-image:url({{ bagisto_asset('images/custom/fixed.jpg') }})">
				<div class="descimg">
					<div class="desctext">
						<h4>"</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptatem quod qui vero aspernatur quidem vel beatae assumenda. Voluptatem, eveniet accusamus corrupti rerum suscipit corporis ipsa. Doloremque, minus saepe excepturi!</p>
						<h4>"</h4>
					</div>
				</div>
			</div>
		</div>


		<div id="choisecat">
			<div class="container">
				<h3>Choose category</h3>
				<p class="shortdesc">Ako ima potrebe, kratak opis...</p>

				<div id="choosecategory" class="helper">
					<div id="gg-screen"></div>
					<div class="flex-container">
						<p class="showSingle active" target="1">Lorem ipsum 1</p>
						<p class="showSingle" target="2">Lorem ipsum 2</p>
						<p class="showSingle" target="3">Lorem ipsum 3</p>
						<p class="showSingle" target="4">Lorem ipsum 4</p>
					</div>

					<div id="div1" class="targetDiv">
						<div class="gg-box">
							<div class="gg-element">
								<div class="row">
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/1.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/2.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/3.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div id="div2" class="targetDiv">
						<div class="gg-box">
							<div class="gg-element">
								<div class="row">
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/10.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/11.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/12.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div id="div3" class="targetDiv">
						<div class="gg-box">
							<div class="gg-element">
								<div class="row">
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/4.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/5.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/6.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div id="div4" class="targetDiv">
						<div class="gg-box">
							<div class="gg-element">
								<div class="row">
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/7.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/8.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>
									<div class="col-1-3">
										<a href="#">
											<div class="viewproducts">
												<img src="{{ bagisto_asset('images/custom/choosecat/9.jpg') }}" alt="" class="cov3">
												<p class="viewproduct">VIEW</p>
											</div>
											<h4>Lorem ipsum</h4>
											<p class="price">$129.99</p>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="oneproductfullimage">
			<div class="container">
				<div class="oneproductfullimage">
					<img src="{{ bagisto_asset('images/custom/oneproductfullimage.jpg') }}" alt="">
					<div class="desc_text">
						<p>| 2019</p>
						<h4>LOREM</h4>
						<h4>IPSUM</h4>
						<a href="#">DISCOVER NOW</a>
					</div>
				</div>
			</div>
		</div>


		<div id="newsletter">
			<div class="container">
				<div class="nl">
					<input id="email" type="text" placeholder="Newsletter, type your e-mail..">
					<button type="submit" value="send">Send</button>
				</div>
			</div>
		</div>

	</main>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-1-4">
					<a href="index.html">
						<img src="{{ bagisto_asset('images/logo.png') }}" alt="">
					</a>
				</div>
				<div class="col-1-4">
					<ul class="list-reset">
						<li style="text-decoration:underline;">Adress</li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i> Savska 45</li>
						<li><i class="fa fa-circle-o" aria-hidden="true"></i> Beograd 11400</li>
					</ul>
				</div>
				<div class="col-1-4">
					<ul class="list-reset">
						<li style="text-decoration:underline;">Info</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> e-mail: lorem@lorem.com</li>
						<li><i class="fa fa-phone-square" aria-hidden="true"></i> phone: 011 111 111</li>
					</ul>
				</div>
				<div class="col-1-4">
					<ul class="list-reset">
						<li style="text-decoration:underline;">Soc networks</li>
						<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<div id="underfooter">
		<h4>Copyright © 2019 DGQ. All rights reserved.</h4>
	</div>
@stop