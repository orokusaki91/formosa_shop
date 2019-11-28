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
		<div id="contact">

			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d609634.4563145813!2d20.314717574753764!3d44.781881721029016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa3d7b53fbd%3A0x1db8645cf2177ee4!2sBelgrade!5e0!3m2!1sen!2srs!4v1559656359618!5m2!1sen!2srs"
					frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-1-2">
						<h4>Information:</h4>
						<ul class="list-reset">
							<li><span class="bold"><i class="fa fa-map-marker" aria-hidden="true"></i> Adresa</span>: Ulica i broj</li>
							<li><span class="bold"><i class="fa fa-phone" aria-hidden="true"></i> Tel</span>. 065 123 123</li>
							<li><span class="bold"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</span>. agency@lorem.com</li>
						</ul>
					</div>

					<div class="col-1-2">
						<h4>Send e-mail:</h4>
						<form action="" id="contactForm" method="post">
							<div class="form-group">
								<input type="text" name="username" id="username" placeholder="username">
								<span class="input-error"></span>
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" placeholder="email">
								<span class="input-error"></span>
							</div>
							<div class="form-group">
								<textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Message.."></textarea>
								<span class="input-error"></span>
							</div>
							<button type="submit" class="btn">Send..</button>
						</form>
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
