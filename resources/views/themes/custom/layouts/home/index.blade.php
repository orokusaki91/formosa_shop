<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>FORMOSA | @yield('page_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">

	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ bagisto_asset('css/welcome.css') . '?ver=' . time() }}">

    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ bagisto_asset('images/favicon.jpg') }}" />
    @endif

    @yield('head')

    @section('seo')
        <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
    @show

    @stack('css')

    {!! view_render_event('bagisto.shop.layout.head') !!}
</head>

<body>
	{!! view_render_event('bagisto.shop.layout.header.before') !!}

    @include('shop::layouts.home.header.header')

    {!! view_render_event('bagisto.shop.layout.header.after') !!}

	@yield('content-wrapper')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ bagisto_asset('js/app.js') . '?ver=' . time() }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
	<script type="text/javascript" src="{{ bagisto_asset('js/fullpage/jquery.fullpage.min.js') }}"></script>
	<script type="text/javascript">
		FastClick.attach(document.body);
		$('#fullpage').fullpage();
	</script>

	<script>
		function myFunction() {
			var x = document.getElementsByClassName("loginreg_div")[0];
			if (x.style.display === "flex") {
				x.style.display = "none";
			} else {
				x.style.display = "flex";
			}
		}
	</script>

	<script>
		$(document).ready(function() {
			$(window).scroll(function() {
				$('.fadein').each(function(i) {

					var bottom_of_element = $(this).offset().top + $(this).outerHeight();
					var bottom_of_window = $(window).scrollTop() + $(window).height();

					if (bottom_of_window > bottom_of_element) {
						$(this).animate({
							'opacity': '1'
						}, 100);
					}

				});
			});
		});
	</script>
</body>
</html>