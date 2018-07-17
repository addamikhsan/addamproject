<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cekrek</title>


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/animate.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/bootstrap.css'); ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/gallery/css/style.css'); ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?> ">

    <link rel="stylesheet" href="<?php echo base_url('assets/font/glyphicons-halflings-regular.ttf'); ?> ">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/gallery/js/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li><a href="<?php echo base_url('gallery'); ?>">Gallery</a></li>
					<li><a href="<?php echo base_url('auth/login'); ?>">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<a class="fh5co-logo">Cekrek</a>    
				</div>
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			</div>
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 animate-box">
						<h2 class="intro-heading">Buat Fotomu seviral mungkin!</h2>
						<p><span>Foto  Edit  Upload</span></p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-portfolio-section">
			<div class="container">
				<ul id="filters" class="clearfix animate-box">
					<li><span class="filter active" data-filter=".all">All</span></li>
					<li><span class="filter" data-filter=".app">App</span></li>
					<li><span class="filter" data-filter=".card">Card</span></li>
					<li><span class="filter" data-filter=".icon">Icon</span></li>
					<li><span class="filter" data-filter=".logo">Logo</span></li>
					<li><span class="filter" data-filter=".web">Web</span></li>
				</ul>