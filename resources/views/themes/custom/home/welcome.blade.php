@extends('shop::layouts.home.index')

@section('page_title')
    {{ __('shop::app.home.page-title') }}
@endsection

@section('content-wrapper')
    <div id="fullpage">
		<section style="background:url({{ bagisto_asset('images/home/mainpage_back/1.jpg') }}); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover;">
			<div class="textcenter">
				<p>#furniture</p>
				<h3>Naslov segmenta</h3>
				<a href="{{ route('shop.home.index') }}">Shop Now</a>
			</div>
		</section>

		<section style="background:url({{ bagisto_asset('images/home/mainpage_back/2.jpg') }});background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover;">
			<div class="textcenter">
				<p>#furniture</p>
				<h3>Naslov segmenta</h3>
				<a href="{{ route('shop.home.index') }}">Shop Now</a>
			</div>
		</section>

		<section style="background:url({{ bagisto_asset('images/home/mainpage_back/3.jpg') }});background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover;">
			<div class="textcenter">
				<p>#furniture</p>
				<h3>Naslov segmenta</h3>
				<a href="{{ route('shop.home.index') }}">Shop Now</a>
			</div>
		</section>


		<section style="background:url({{ bagisto_asset('images/home/mainpage_back/4.jpg') }});background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover;">
			<div class="textcenter">
				<p>#furniture</p>
				<h3>Naslov segmenta</h3>
				<a href="{{ route('shop.home.index') }}">Shop Now</a>
			</div>
		</section>

		<section style="background:url({{ bagisto_asset('images/home/mainpage_back/5.jpg') }});background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover;">
			<div class="textcenter">
				<p>#furniture</p>
				<h3>Naslov segmenta</h3>
				<a href="{{ route('shop.home.index') }}">Shop Now</a>
			</div>
		</section>

	    {!! view_render_event('bagisto.shop.layout.footer.before') !!}
	    @include('shop::layouts.home.footer.footer')
	    {!! view_render_event('bagisto.shop.layout.footer.after') !!}
	</div>
@endsection
