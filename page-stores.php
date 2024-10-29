<?php

/* Template Name: Stores */



?><!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/png" href="<?php if (get_option('site_icon')){echo get_site_icon_url();}else{ echo get_template_directory_uri().'/favicon.png';}?>">
    
	<link href='https://fonts.googleapis.com/css?family=Poppins:100,700,40&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>Our Stores</title>

	<?php wp_head(); ?>

    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body class="  <?php echo implode(" ",get_body_class()); ?>">

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->


<!-- Main container -->
<div class="page-container">
    
<?php get_header(); ?>

<!-- bloc-13 -->
<div class="bloc bgc-5700 full-width-bloc l-bloc" id="bloc-13">
	<div class="container bloc-md bloc-lg-md">
		<div class="row">
			<div class="text-start col-md-10 offset-md-1 offset-lg-1 col-lg-5 offset-0 col-12 col-sm-10 offset-sm-1">
				<div class="store-card mb-3 primary-gradient-bg fill-card">
					<h1 class="mb-4 tc-2175">
						Our Stores
					</h1>
					<p class="tc-654">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br>
					</p>
				</div>
			</div>
			<div class="text-start offset-lg-0 d-flex col-md-10 offset-md-1 col-lg-5 offset-0 col-12 col-sm-10 offset-sm-1">
				<div class="store-card fill-card">
					<h3 class="primary-text">
						Tokyo
					</h3>
					<h4 class="mb-4 tc-6533">
						Chiyoda-ku
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</p><a href="<?php echo home_url('/'); ?>" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none mb-5">Get Directions</a>
					<h3 class="primary-text">
						Kyoto
					</h3>
					<h4 class="mb-4 tc-6533">
						Kyoto-shi
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</p><a href="<?php echo home_url('/'); ?>" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none mb-5">Get Directions</a>
					<h3 class="primary-text">
						California
					</h3>
					<h4 class="mb-4 tc-6533">
						San Francisco
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</p><a href="<?php echo home_url('/'); ?>" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none mb-5">Get Directions</a>
					<h3 class="primary-text">
						New York
					</h3>
					<h4 class="mb-4 tc-6533">
						Upper West Side
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</p><a href="<?php echo home_url('/'); ?>" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none mb-5">Get Directions</a>
					<h3 class="primary-text">
						Central London
					</h3>
					<h4 class="mb-4 tc-6533">
						Regent Street
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</p><a href="<?php echo home_url('/'); ?>" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none mb-5">Get Directions</a>
					<h3 class="primary-text">
						Tyne and Wear
					</h3>
					<h4 class="mb-4 tc-6533">
						Newcastle upon Tyne
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</p><a href="<?php echo home_url('/'); ?>" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none mb-5">Get Directions</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-13 END -->

<!-- ScrollToTop Button -->
<button aria-label="Scroll to top button" class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><path class="scroll-to-top-btn-icon" d="M30,22.656l-14-13-14,13"/></svg></button>
<!-- ScrollToTop Button END-->


<?php get_footer(); ?>

</div>
<!-- Main container END -->
    
<?php wp_footer(); ?>

<!-- Additional JS -->
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/lazysizes.min.js" defer></script>
<!-- Additional JS END -->


</body>
</html>
