<?php

/* Template Name: Product */



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
    <title>product</title>

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

<!-- bloc-7 -->
<div class="bloc l-bloc full-width-bloc" id="bloc-7">
	<div class="container bloc-md bloc-lg-md">
		<div class="row">
			<div class="text-start offset-lg-1 col-lg-10 mb-4 col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
				<h1 class="tc-6533 mb-0">
					Tablet Air
				</h1>
			</div>
			<div class="text-start offset-lg-1 mb-4 col-lg-6 mb-md-4 mb-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
				<div class="store-card outline-card fill-card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-lg.jpg" class="img-fluid mx-auto d-block img-rd-lg img-fluid-up lazyload" alt="tablet product">
				</div>
			</div>
			<div class="text-start col-lg-4 col-md-10 offset-md-1 offset-lg-0 col-sm-10 offset-sm-1 col-10 offset-1">
				<div class="store-card outline-card fill-card">
					<p class="sm-product-title tc-2101 mb-0">
						Free Delivery
					</p>
					<h3 class="tc-6533">
						Buy Tablet Air
					</h3>
					<p class="tc-6533 float-lg-none mb-4">
						From £1999
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.&nbsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
					</p>
					<div class="divider-h">
					</div>
					<h5 class="tc-6533 mb-3">
						Colour
					</h5>
					<div class="blocs-grid-container mb-4 colour-option-grid">
						<div class="text-lg-start primary-outline model-option">
							<p class="mb-0">
								<span class="color-dot silver-dot">•</span>&nbsp;Silver
							</p>
						</div>
						<div class="text-lg-start model-option">
							<p class="mb-0">
								<span class="color-dot blue-dot">•</span>&nbsp;Blue
							</p>
						</div>
						<div class="text-lg-start model-option">
							<p class="mb-0">
								<span class="color-dot white-dot">•</span>&nbsp;White
							</p>
						</div>
						<div class="text-lg-start model-option">
							<p class="mb-0">
								<span class="color-dot">•</span>&nbsp;Black
							</p>
						</div>
						<div class="text-lg-start model-option">
							<p class="mb-0">
								<span class="color-dot red-dot">•</span>&nbsp;Red
							</p>
						</div>
						<div class="text-lg-start model-option">
							<p class="mb-0">
								<span class="color-dot green-dot">•</span>&nbsp;Green
							</p>
						</div>
					</div>
					<div class="divider-h">
					</div>
					<h5 class="tc-6533 mb-3">
						Storage
					</h5>
					<ul class="list-unstyled list-sp-lg">
						<li>
							<div class="text-lg-start primary-outline model-option">
								<p class="mb-0 float-lg-none">
									128GB <span class="price-right token primary-gradient-bg">$1999</span>
								</p>
							</div>
						</li>
						<li>
							<div class="text-lg-start model-option">
								<p class="mb-0 float-lg-none">
									256GB <span class="price-right token">$2099</span>
								</p>
							</div>
						</li>
						<li>
							<div class="text-lg-start model-option">
								<p class="mb-0 float-lg-none">
									512GB <span class="price-right token">$2199</span>
								</p>
							</div>
						</li>
					</ul>
					<div class="divider-h">
					</div><a href="<?php echo home_url('/'); ?>/product" class="btn btn-rd btn-c-2101 buy-btn float-lg-none ps-5 pe-5 w-100 btn-lg">Buy</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-7 END -->

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
