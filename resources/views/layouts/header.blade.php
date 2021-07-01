<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stripes App</title>
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"  >-->
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<link href="{{ asset('css/main.css') }}" rel="stylesheet" >
		
	</head>
    <body class="antialiased">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="index.html">Simple Ecommerce</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
				<ul class="navbar-nav m-auto">
					<li class="nav-item m-auto">
						 <a href="{{ url('/') }}" class="nav-link">Products</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('logout') }}" class="nav-link">Log Out</a>
					</li>
					
				</ul>

				<form class="form-inline my-2 my-lg-0">
					<div class="input-group input-group-sm">
						<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
						<div class="input-group-append">
							<button type="button" class="btn btn-secondary btn-number">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>					
				</form>
			</div>
		</div>
	</nav>
	<section class="jumbotron text-center p-3">
		<div class="container">
			<h2 class="jumbotron-heading">E-COMMERCE CART</h1>
		 </div>
	</section>

	