<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />
	<title>TBrownA Home</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet'
		type='text/css'>
	<link rel='stylesheet' href='/assets/edd_templates/edd.css' type='text/css' media='all' />
	<link rel='stylesheet' href='/assets/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='/assets/css/custom.css' type='text/css' media='all' />
	<link rel='stylesheet' href='/assets/css/font-awesome.css' type='text/css' media='all' />

    <!-- color scheme -->
	<link href="/assets/css/skins/orange.css" rel="stylesheet">

    <!-- scripts -->
    <script type='text/javascript' src='/assets/js/jquery.js'></script>
    <script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='/assets/js/masonry.js'></script>
    <script type='text/javascript' src='/assets/js/imagesloaded.js'></script>
    <!-- <script type='text/javascript' src='/assets/js/SmoothScroll.js'></script> -->
    <script type='text/javascript' src='/assets/js/init.js'></script>
    <!-- <script type='text/javascript' src='/assets/js/anim.js'></script> -->

</head>

<body>
	<!-- navigation uri -->
	<?php $uri = service('uri')?>
	<!-- end of navigation uri -->

	<div class="boxedlayout">
		<!-- HEADER
		================================================== -->
		<nav id="wow-menu" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href='/'>
						<img alt="TbrownA" src="../assets/img/logo1.jpg" />
					</a>
				</div>
				<!-- Menu -->
				<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
					<ul id="menu-top" class="nav navbar-nav navbar-right">
						<li class="<?= ($uri->getsegment(1) == ''? 'active' : null)?>"><a href="/">Home</a></li>
						<li class="<?= ($uri->getsegment(1) == 'view_all'? 'active' : null)?>"><a href="/view_all">Our Products</a></li>
						<li class="<?= ($uri->getsegment(1) == 'contact'? 'active' : null)?>"><a href="/contact">Contact Us</a></li>
						<!-- <li class="dropdown"><a href="#">Pages</a>
							<ul class="dropdown-menu">
								<li><a href="productsingle-nosidebar.html">Product Single No Sidebar</a></li>
								<li><a href="elements.html">Elements</a></li>
							</ul> 
						</li> -->
					</ul>
				</div>
			</div>
		</nav>