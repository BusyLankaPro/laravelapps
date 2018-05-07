<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title> V - Store </title>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
		<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}">
		<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	</head>
	<body>


		<nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-top myRemoveFixedPositionInSM" >
		<a class="navbar-brand" href="#">V - Store</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item {{Request::is('Home')? 'active' : '' }}">
				<a class="nav-link" href="Home">Home </a>
			</li>
			<li class="nav-item {{Request::is('Branches')? 'active' : '' }}">
				<a class="nav-link" href="Branches">Branches</a>
			</li>
			<li class="nav-item {{Request::is('Sales')? 'active' : '' }}">
				<a class="nav-link" href="Sales">Sales</a>
			</li>
			<li class="nav-item {{Request::is('HR')? 'active' : '' }}">
				<a class="nav-link" href="HR">HR</a>
			</li>
			<li class="nav-item {{Request::is('ItemsMainGroup')? 'active' : '' }}">
				<a class="nav-link" href="ItemsMainGroup">Items</a>
			</li>
			<li class="nav-item {{Request::is('Purchase')? 'active' : '' }}">
				<a class="nav-link" href="Purchase">Purchase</a>
			</li>
			<li class="nav-item {{Request::is('Purchase_Return')? 'active' : '' }}">
				<a class="nav-link" href="Purchase_Return">Purchase Return</a>
			</li>
		</ul>
		</div>
		</nav>


<div class="container-fluid"  style="overflow-x:hidden;">
<script type="text/javascript">

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

</script>
  @yield('basicBody')
</div>

	<footer class="text-center myFooter myRemoveFixedPositionInSM" >Developed By Nuhman.Eng</footer>

	</body>
</html>
