<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	@if($title != Null)
	<title>MyCar - {{ $title }}</title>
	@else
	<title>MyCar</title>
	@endif
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/components.css">
	<link rel="stylesheet" href="/css/datatables.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>
	<x-navbar-dashboard></x-navbar-dashboard>
	<div class="container-fluid">
	  <div class="row">
			<x-sidebar-dashboard></x-sidebar-dashboard>
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
	      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					{{ $header }}
	      </div>
	      {{ $slot }}
	    </main>
		</div>
	</div>	
	<x-footer-dashboard></x-footer-dashboard>

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.bundle.js"></script>
	<script src="/js/datatables.js"></script>
	<script src="/js/dashboard.js"></script>
	{{ $script }}
</body>
</html>