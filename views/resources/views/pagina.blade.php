<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="{{ asset('css/app.css')}}"> -->
	<link rel="stylesheet" href="{{ URL::to('css/app.css')}}">

	<title></title>
</head>
<body>
	<div class="container">	
		<div class="alert alert-success" role="alert">
  				Os scripts de CSS e JS estão funcionando!
		</div>
	</div>

	<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>