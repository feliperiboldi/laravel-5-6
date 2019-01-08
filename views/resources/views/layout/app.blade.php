<!DOCTYPE html>
<html>
<head>
	<title>App - @yield('titulo')</title>
</head>
<body>
	@section('barraLateral')
		<p>Esta parte da sessão é do Template Pai</p>
	@show
	<div>
		@yield('conteudo')
	</div>
</body>
</html>