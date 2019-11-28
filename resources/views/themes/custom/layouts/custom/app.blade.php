<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>FORMOSA | ONLINE SHOP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('themes/custom/assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/custom/assets/css/jquery.bxslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('themes/custom/assets/css/main.css') . '?ver=' . time() }}">

	@if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ asset('themes/custom/assets/images/favicon.jpg') }}" />
    @endif
</head>

<body>

	@yield('content-wrapper')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="{{ asset('themes/custom/assets/js/rem.min.js') }}"></script>
	<script src="{{ asset('themes/custom/assets/js/jquery.bxslider.min.js') }}"></script>
	
	<script src="{{ asset('themes/custom/assets/js/nav.jquery.min.js') }}"></script>
	<script> $('.nav').nav(); </script>
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

	<script src="{{ asset('themes/custom/assets/js/choosecategory/dotgallery.js') }}"></script>
	<script src="{{ asset('themes/custom/assets/js/choosecategory/dotgallerycolor.js') }}"></script>
	<script src="{{ asset('themes/custom/assets/js/choosecategory/grid-gallery.min.js') }}"></script>

	<script src="{{ asset('themes/custom/assets/js/app.js') . '?ver=' . time() }}"></script>
</body>
</html>