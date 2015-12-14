<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Code Arena</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
    <!-- pass through the CSRF (cross-site request forgery) token -->
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />

</head>
<body>
@yield('body')
<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
@yield('scripts')
</body>
</html>