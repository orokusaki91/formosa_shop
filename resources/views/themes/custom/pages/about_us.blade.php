@extends('themes.custom.layouts.custom.app')

{{-- @section('page_title')
    {{ __('shop::app.home.page-title') }}
@endsection --}}

@section('content-wrapper')
	<header>
		<div id="navbar">
			<div id="header_nav" class="container">


				<div class="logo">
					<a href="{{ route('shop.home.index') }}"><img src="{{ asset('themes/custom/assets/images/custom/logo.png') }}" alt=""></a>
				</div>


				<a href="#" class="nav-button"><i class="fa fa-bars" aria-hidden="true"></i></a>

				<nav class="nav">
					<ul>
						<li><a href="{{ route('shop.home.index') }}">Pocetna</a></li>
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
						<li><a href="{{ route('about_us') }}">About Us</a></li>
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
		<div class="productimg">
			<div class="container">
				<div class="imgofprod">
					<img src="{{ asset('themes/custom/assets/images/custom/more_products/productImg.jpg') }}" alt="">

					<div class="desc_text">
						<h4>About us</h4>
						<div class="linktohome">
							<a href="{{ route('shop.home.index') }}">Home</a>
							<p><i class="fa fa-angle-right" aria-hidden="true"></i></p>
							<p>About us</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div id="aboutus">
			<div class="container">
				<div class="row">
					<div class="col-1-2 center">
						<h3>Who we are?</h3>
					</div>
					<div class="col-1-2">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur, quis, consequatur esse laboriosam ex numquam explicabo necessitatibus libero nobis corrupti iure expedita consequuntur quam laborum eum impedit repudiandae
							similique ducimus quidem fuga quae in deleniti earum maiores provident maxime.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur, quis, consequatur esse laboriosam ex numquam explicabo necessitatibus libero nobis corrupti iure expedita consequuntur quam laborum eum impedit repudiandae
							similique ducimus quidem fuga quae in deleniti earum maiores provident maxime.</p>
					</div>

					<div class="col-1-2 center">
						<h3>What we do?</h3>
					</div>
					<div class="col-1-2">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur, quis, consequatur esse laboriosam ex numquam explicabo necessitatibus libero nobis corrupti iure expedita consequuntur quam laborum eum impedit repudiandae
							similique ducimus quidem fuga quae in deleniti earum maiores provident maxime.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur, quis, consequatur esse laboriosam ex numquam explicabo necessitatibus libero nobis corrupti iure expedita consequuntur quam laborum eum impedit repudiandae
							similique ducimus quidem fuga quae in deleniti earum maiores provident maxime.</p>
					</div>

					<div class="col-1-2 center">
						<h3>Our plans</h3>
					</div>
					<div class="col-1-2">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur, quis, consequatur esse laboriosam ex numquam explicabo necessitatibus libero nobis corrupti iure expedita consequuntur quam laborum eum impedit repudiandae
							similique ducimus quidem fuga quae in deleniti earum maiores provident maxime.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur, quis, consequatur esse laboriosam ex numquam explicabo necessitatibus libero nobis corrupti iure expedita consequuntur quam laborum eum impedit repudiandae
							similique ducimus quidem fuga quae in deleniti earum maiores provident maxime.</p>
					</div>

				</div>
			</div>
		</div>

	</main>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-1-4">
					<a href="{{ route('shop.home.index') }}">
						<img src="{{ asset('themes/custom/assets/images/custom/logo.png') }}" alt="">
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
