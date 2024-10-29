<!doctype html>
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
    <title>Home</title>

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

<!-- header -->
<div class="bloc full-width-bloc l-bloc" id="header">
	<div class="container bloc-md">
		<div class="row g-0">
			<div class="offset-lg-1 mb-4 col-lg-4 col-10 offset-1">
				<h1 class="mb-4 bold-text">
					<span class="primary-text">Our Store.</span> The best way to buy the products you love.
				</h1>
			</div>
			<div class="text-start offset-md-0 col-md-12 col">
				<div class="blocs-horizontal-scroll-container compact-blocs-controls">
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-prev">
						<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M22,2L9,16,22,30"></path></svg></span>
					</div>
					<div class="blocs-horizontal-scroll-area row-offset">
							<div class="me-1 me-sm-2 me-md-3 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center mt-2 category-title">
									Phones
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Tablets
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/computer.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Computers
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									TVs
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/gaming.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Gaming
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/watch.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Watches
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/headphones.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Audio
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/camera.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Cameras<br>
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/accessories.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Accessories
								</h5>
							</div>
							<div class="ms-1 me-1 me-sm-2 ms-sm-2 ms-md-3 me-md-3 ms-lg-5 me-lg-5">
								<a href="<?php echo home_url('/'); ?>/category"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/gift-card.svg" class="img-fluid mx-auto d-block category-icon primary-gradient-bg lazyload" alt="store card-13-iphone-nav-202309_GEO_EMEA%3Fwid=400%26hei=260%26fmt=png-alpha%26"></a>
								<h5 class="mb-4 text-center tc-6533 mt-2 category-title">
									Gift Card
								</h5>
							</div>
						</div>
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-next">
							<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M10.344,2l13,14-13,14"></path></svg></span>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- header END -->

<!-- latest-products -->
<div class="bloc full-width-bloc bgc-5700 l-bloc" id="latest-products">
	<div class="container bloc-md-lg bloc-md">
		<div class="row g-0">
			<div class="col-lg-10 offset-lg-1 col-10 offset-1">
				<h3 class="mb-4 bold-text">
					<span class="primary-text">The Latest.</span> Take a look at what’s new.
				</h3>
			</div>
			<div class="text-start offset-lg-0 col-lg-12 col">
				<div class="blocs-horizontal-scroll-container">
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-prev">
						<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M22,2L9,16,22,30"></path></svg></span>
					</div>
					<div class="blocs-horizontal-scroll-area row-offset">
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											Ultra HD QLED
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £2000
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/laptop-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											Laptop Air
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £999
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											Tablet Pro
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £899
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product" class="lazyload"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											Phone Pro
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £999
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											Tablet
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £299
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											Phone
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £699
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
							<div class="store-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="row g-0">
									<div class="col-lg-9">
										<h5 class="tc-6533 mb-0 lg-sub-title">
											HD LED
										</h5>
										<p class="tc-6533 float-lg-none mb-2">
											From £899
										</p>
									</div>
									<div class="col-lg-3 align-self-end">
										<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
									</div>
								</div>
							</div>
						</div>
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-next">
							<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M10.344,2l13,14-13,14"></path></svg></span>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- latest-products END -->

<!-- top-seller-products -->
<div class="bloc full-width-bloc bgc-5700 l-bloc" id="top-seller-products">
	<div class="container bloc-md">
		<div class="row g-0">
			<div class="col-lg-10 offset-lg-1 col-10 offset-1">
				<h3 class="mb-4 bold-text">
					<span class="primary-text">Top Sellers.</span>&nbsp;Find the perfect gift.
				</h3>
			</div>
			<div class="text-start offset-lg-0 col-lg-12 col">
				<div class="blocs-horizontal-scroll-container">
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-prev">
						<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M22,2L9,16,22,30"></path></svg></span>
					</div>
					<div class="blocs-horizontal-scroll-area row-offset">
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										8K QLED
									</h5>
									<p class="tc-6533 mb-0">
										From £2999
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Tablet Ultra
									</h5>
									<p class="tc-6533 mb-0">
										From £1099
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Phone Air
									</h5>
									<p class="tc-6533 mb-0">
										From £699
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/laptop-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Laptop Pro
									</h5>
									<p class="tc-6533 mb-0">
										From £2599
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Ultra HD QLED
									</h5>
									<p class="tc-6533 mb-0">
										From £2999
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Phone Pro
									</h5>
									<p class="tc-6533 mb-0">
										From £999
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Tablet Air
									</h5>
									<p class="tc-6533 mb-0">
										From £699
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/laptop-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Laptop Air
									</h5>
									<p class="tc-6533 mb-0">
										From £999
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
							<div class="store-card sm-card">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h5 class="sm-product-title tc-6533">
										Ultra HD QLED
									</h5>
									<p class="tc-6533 mb-0">
										From £3999
									</p><a href="<?php echo home_url('/'); ?>/product"><img class="img-fluid float-lg-end arrow-btn sm-arrow-btn lazyload" src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="arrow dark" data-bs-placement="top" data-bs-toggle="tooltip" title="View Product"></a>
								</div>
							</div>
						</div>
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-next">
							<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M10.344,2l13,14-13,14"></path></svg></span>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- top-seller-products END -->

<!-- service -->
<div class="bloc bgc-5700 none full-width-bloc l-bloc" id="service">
	<div class="container bloc-md">
		<div class="row row-offset">
			<div class="offset-lg-0 col-lg-12 ps-0">
				<h3 class="mb-4 bold-text">
					<span class="primary-text">Great Service.</span>&nbsp;Why you'll love to shop with us.<br>
				</h3>
			</div>
			<div class="text-start ps-0 mb-4 pe-0 col-md-12 mb-lg-0 pe-lg-2 d-flex col-lg-3">
				<div class="store-card fill-card">
					<h4 class="sm-product-title tc-2101">
						Free Delivery
					</h4>
					<p class="tc-6533 lg-sub-title">
						Get your tech the next day.
					</p>
					<div class=" large-icon">
						<svg height="100%" viewBox="0 0 200 200" width="100%" xmlns="http://www.w3.org/2000/svg"><path class="primary-icon" d="m170.027 148.632h-7.15a20.057 20.057 0 0 1 -39.43 0h-45.189a20.09 20.09 0 0 1 -39.484 0h-7.8c-10.511 0-15.972-5.455-15.972-15.9v-76.961c0-10.442 5.461-15.956 15.972-15.956h86.2c10.453 0 15.973 5.514 15.973 15.956v16.429h15.62c5.754 0 9.629 1.349 13.094 5.221l19.965 22.526c3.23 3.637 4.169 6.335 4.169 12.084v20.708c.005 10.438-5.517 15.893-15.968 15.893zm-111.453 8.389a12.085 12.085 0 1 0 -12.155-12.084 12.061 12.061 0 0 0 12.155 12.084zm65.126-101.074c0-4.4-2.349-6.687-6.694-6.687h-85.914c-4.4 0-6.635 2.288-6.635 6.687v76.612c0 4.4 2.231 6.628 6.635 6.628h8.189a20.108 20.108 0 0 1 38.474 0h45.945zm7.4 88.99a12.068 12.068 0 1 0 12.1-12.085 12.111 12.111 0 0 0 -12.106 12.085zm45.45-33.086a9.819 9.819 0 0 0 -2.408-6.335l-18.442-20.708c-2.409-2.64-4.522-3.168-7.517-3.168h-15.033v45.971a20.071 20.071 0 0 1 29.226 11.576h7.474c4.4 0 6.694-2.228 6.694-6.628v-20.708zm-37.463-4.282v-20.062h7.28a6.324 6.324 0 0 1 4.463 2.229l17.5 19.651a4.307 4.307 0 0 1 1.41 3.168h-25.6c-3.122 0-5.059-1.877-5.059-4.986z" fill-rule="evenodd"></path></svg>
						
					</div>
				</div>
			</div>
			<div class="text-start d-flex mb-4 pe-0 ps-0 col-md-12 mb-lg-0 ps-lg-2 pe-lg-2 col-lg-6">
					<div class="blocs-grid-container service-grid">
						<div class="store-card bgc-2101 box-card primary-gradient-bg">
							<h4 class="sm-product-title tc-2175">
								Pay Monthly
							</h4>
							<p class="tc-654 mb-0 lg-sub-title">
								Spread the cost.
							</p>
						</div>
						<div class="store-card box-card">
							<h4 class="sm-product-title tc-2101">
								Trade-ins
							</h4>
							<p class="tc-6533 mb-0 lg-sub-title">
								It pays to trade in.
							</p>
						</div>
						<div class="store-card box-card">
							<h4 class="sm-product-title tc-2101">
								Extended Warranty
							</h4>
							<p class="tc-6533 mb-0 lg-sub-title">
								We got you covered.
							</p>
						</div>
						<div class="store-card box-card primary-gradient-bg">
							<h4 class="sm-product-title tc-2175">
								Free Returns
							</h4>
							<p class="tc-654 mb-0 lg-sub-title">
								Hassle free returns.<br>
							</p>
						</div>
					</div>
				</div>
			<div class="text-start ps-0 pe-0 col-md-12 ps-lg-2 d-flex col-lg-3">
					<div class="store-card fill-card">
						<h4 class="sm-product-title tc-2101">
							Product Support
						</h4>
						<p class="tc-6533 lg-sub-title">
							Get help with your tech.&nbsp;
						</p>
						<div class=" large-icon">
							<svg height="100%" viewBox="0 0 200 200" width="100%" xmlns="http://www.w3.org/2000/svg"><path class="primary-icon" d="m22.165 54.493a2.791 2.791 0 0 1 2.793-2.793h17.32a2.789 2.789 0 1 1 0 5.578h-17.32a2.791 2.791 0 0 1 -2.793-2.785zm24.742 56.289h-21.949a2.789 2.789 0 1 0 0 5.578h21.95a2.789 2.789 0 1 0 0-5.578zm151.193-45.652v65.452a22 22 0 0 1 -21.989 21.969h-7.429l2.438 26.786a2.8 2.8 0 0 1 -4.613 2.349l-33.265-29.135h-55.394a21.979 21.979 0 0 1 -17.648-8.869l-27.6 24.17a2.793 2.793 0 0 1 -4.613-2.35l2.428-26.785h-7.426a22 22 0 0 1 -21.989-21.959v-65.452a22 22 0 0 1 21.989-21.959h98.263a22.131 22.131 0 0 1 20.412 13.82h34.447a22 22 0 0 1 21.989 21.963zm-140.681 73.562a21.789 21.789 0 0 1 -1.562-8.11v-33.921h-30.9a2.789 2.789 0 1 1 0-5.578h30.9v-14.114h-30.9a2.789 2.789 0 1 1 0-5.578h30.9v-6.261a21.78 21.78 0 0 1 1.468-7.848h-3.6a2.789 2.789 0 1 1 0-5.578h6.745a21.968 21.968 0 0 1 17.383-8.533h57.625a16.515 16.515 0 0 0 -14.221-8.246h-98.268a16.409 16.409 0 0 0 -16.4 16.381v65.452a16.41 16.41 0 0 0 16.4 16.381h10.484a2.79 2.79 0 0 1 2.792 2.79q0 .126-.011.252l-2.082 22.872zm135.1-73.562a16.41 16.41 0 0 0 -16.4-16.383h-98.271a16.413 16.413 0 0 0 -16.405 16.383v65.452a16.411 16.411 0 0 0 16.406 16.381h56.444a2.8 2.8 0 0 1 1.843.693l28.789 25.221-2.082-22.872a2.791 2.791 0 0 1 2.528-3.031c.084-.007.168-.011.253-.011h10.484a16.409 16.409 0 0 0 16.4-16.381zm-43.439 12.09a25.1 25.1 0 0 1 -3.846 14.354 23.187 23.187 0 0 1 -4.4 4.9c-.839.716-1.707 1.351-2.539 1.966-.388.285-.776.57-1.16.865-1.677 1.281-1.845 1.642-1.807 2.617l.188 4.959a8.723 8.723 0 0 1 -8.407 9.03h-.324a8.737 8.737 0 0 1 -8.714-8.376l-.189-4.958a18.074 18.074 0 0 1 5.932-14.855c1.065-.976 2.174-1.811 3.246-2.619.356-.268.713-.536 1.067-.808a11.077 11.077 0 0 0 2.39-2.282 8.5 8.5 0 0 0 1.1-4.78 4.632 4.632 0 0 0 -9.263 0 8.732 8.732 0 0 1 -17.463.008v-.012a22.1 22.1 0 0 1 44.191 0v-.008zm-5.586 0a16.511 16.511 0 0 0 -33.019-.371q0 .186 0 .371a3.146 3.146 0 0 0 6.291 0 10.234 10.234 0 0 1 10.118-10.22 10.456 10.456 0 0 1 3.984.806 10.049 10.049 0 0 1 6.313 9.41 13.735 13.735 0 0 1 -2.052 7.892 15.837 15.837 0 0 1 -3.594 3.574c-.373.289-.747.57-1.12.85-1.011.762-1.965 1.48-2.831 2.274a12.48 12.48 0 0 0 -4.13 10.543l.188 4.958a3.134 3.134 0 0 0 5.433 2.017 3.1 3.1 0 0 0 .839-2.241l-.187-4.958a8.121 8.121 0 0 1 4-7.262c.409-.312.82-.616 1.231-.919.795-.586 1.543-1.139 2.248-1.734a17.781 17.781 0 0 0 3.371-3.738 19.754 19.754 0 0 0 2.912-11.251zm-7.014 52.007a9.549 9.549 0 1 1 -9.551-9.533 9.552 9.552 0 0 1 9.546 9.533zm-5.586 0a3.963 3.963 0 1 0 -3.963 3.958 3.965 3.965 0 0 0 3.958-3.958z" fill-rule="evenodd"></path></svg>
							
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<!-- service END -->

<!-- quick-picks -->
<div class="bloc full-width-bloc bgc-5700 l-bloc" id="quick-picks">
	<div class="container bloc-md">
		<div class="row g-0">
			<div class="col-lg-10 col-10 offset-1 offset-lg-1">
				<h3 class="mb-4 bold-text">
					<span class="primary-text">Quick Picks.</span>&nbsp;Perfect gifts at perfect prices.
				</h3>
			</div>
			<div class="text-start offset-lg-0 col-lg-12 col">
				<div class="blocs-horizontal-scroll-container">
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-prev">
						<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M22,2L9,16,22,30"></path></svg></span>
					</div>
					<div class="blocs-horizontal-scroll-area row-offset">
							<div class="store-card xs-card text-lg-center text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Ultra HD QLED
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $2999</a>
								</div>
							</div>
							<div class="store-card xs-card text-lg-center text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Tablet Pro
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $1099</a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Phone 15
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $899</a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/laptop-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Laptop Pro
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd buy-btn float-lg-none w-100 btn-c-2101">Buy $2599</a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tv-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										HD TV Plus
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">$5999<br></a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Phone Air
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $699</a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/laptop-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Ultra Laptop
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $2999</a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Tablet Pro
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $999</a>
								</div>
							</div>
							<div class="store-card xs-card text-center">
								<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
								<div class="card-content">
									<h6 class="tc-6533 xs-product-title">
										Phone 15
									</h6><a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 buy-btn float-lg-none w-100">Buy $699</a>
								</div>
							</div>
						</div>
					<div class="blocs-horizontal-scroll-control blocs-scroll-control-next">
							<span class="blocs-round-btn"><svg width="26" height="26" viewBox="0 0 32 32"><path class="horizontal-scroll-icon" d="M10.344,2l13,14-13,14"></path></svg></span>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- quick-picks END -->

<!-- weekly-deals -->
<div class="bloc bgc-5700 none full-width-bloc l-bloc" id="weekly-deals">
	<div class="container bloc-md">
		<div class="row row-offset">
			<div class="col-lg-12 offset-lg-0 ps-lg-0 ps-0 pe-0">
				<h3 class="mb-4 bold-text">
					<span class="primary-text">Weekly Deals.</span> Discover our amazing offers.
				</h3>
			</div>
			<div class="text-start offset-lg-0 ps-0 d-flex mb-4 pe-0 col-md-6 mb-lg-0 ps-md-0 pe-md-2 pe-lg-2 col-lg-4">
				<div class="store-card fill-card">
					<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/laptop-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
					<div class="row g-0">
						<div class="col-lg-12">
							<h4 class="tc-6533 mb-0 lg-sub-title">
								Ultra Laptop
							</h4>
						</div>
						<div class="col-lg-8">
							<p class="tc-6533 mb-0 float-lg-none">
								From £2000
							</p>
							<p class="float-lg-none bold-text sm-text tc-2101 mb-2">
								Save $1000
							</p>
						</div>
						<div class="align-self-end col-lg-4">
							<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-start offset-lg-0 d-flex mb-4 ps-0 pe-0 col-md-6 mb-lg-0 pe-md-0 ps-md-2 ps-lg-2 pe-lg-2 col-lg-4">
				<div class="store-card fill-card">
					<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/tablet-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
					<div class="row g-0">
						<div class="col-lg-12">
							<h4 class="tc-6533 mb-0 lg-sub-title">
								Tablet Air
							</h4>
						</div>
						<div class="col-lg-8">
							<p class="tc-6533 mb-0 float-lg-none">
								From £1999<br>
							</p>
							<p class="tc-2101 float-lg-none bold-text sm-text mb-2">
								Save $400
							</p>
						</div>
						<div class="align-self-end col-lg-4">
							<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd btn-c-2101 float-lg-end buy-btn">Buy</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-start offset-lg-0 d-flex mb-4 ps-0 pe-0 mb-lg-0 ps-md-0 pe-md-2 mb-md-0 ps-lg-2 pe-lg-2 col-lg-4 col-md-12">
				<div class="store-card fill-card">
					<a href="<?php echo home_url('/'); ?>/product"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/phone-product.jpg" class="img-fluid mx-auto d-block lazyload" alt="homepod select-midnight-202210%3Fwid=400%26hei=400%26fmt=jpeg%26qlt=90%26"></a>
					<div class="row g-0">
						<div class="col-lg-12">
							<h4 class="tc-6533 mb-0 lg-sub-title">
								Phone Ultra
							</h4>
						</div>
						<div class="col-lg-8">
							<p class="tc-6533 mb-0 float-lg-none">
								From £999
							</p>
							<p class="tc-2101 float-lg-none bold-text sm-text mb-2">
								Save $100
							</p>
						</div>
						<div class="align-self-end col-lg-4">
							<a href="<?php echo home_url('/'); ?>/product" class="btn btn-sm btn-rd float-lg-end buy-btn btn-c-2101">Buy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- weekly-deals END -->

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
