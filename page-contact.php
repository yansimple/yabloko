<?php

/* Template Name: Contact */



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
    <title>Contact</title>

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
<div class="bloc bgc-5700 full-width-bloc l-bloc" id="bloc-7">
	<div class="container bloc-md bloc-lg-md">
		<div class="row">
			<div class="text-start mb-4 mb-lg-0 d-flex col-lg-5 offset-lg-1 col-sm-10 offset-sm-1">
				<div class="store-card fill-card primary-gradient-bg">
					<h1 class="mb-4 tc-2175">
						Contact
					</h1>
					<p class="mb-5 tc-654">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br>
					</p>
				</div>
			</div>
			<div class="text-start offset-lg-0 col-lg-5 offset-sm-1 col-sm-10">
				<div class="store-card fill-card">
					<form template-path="<?php echo get_template_directory_uri(); ?>/" id="contact_form" data-form-type="blocs-form" novalidate="" data-success-msg="Your message has been sent." data-fail-msg="Sorry it seems that our mail server is not responding, Sorry for the inconvenience!">
						<div class="form-group mb-3">
							<label class="form-label">
								Name
							</label>
							<input id="name" class="form-control" required="">
						</div>
						<div class="form-group mb-3">
							<label class="form-label">
								Email
							</label>
							<input id="email" class="form-control" type="email" data-error-validation-msg="Not a valid email address" required="">
						</div>
						<div class="form-group mb-3">
							<label class="form-label">
								Message
							</label><textarea id="message" class="form-control" rows="4" cols="50" required=""></textarea>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="optin" data-validation-minchecked-message="You must agree to this before we can take your information." data-validation-minchecked-minchecked="1" name="optin">
							<label class="form-check-label">
								We can send you product updates and offers via email. It is possible to opt-out at any time.
							</label>
						</div> 
						<button class="bloc-button btn btn-lg w-100 btn-c-2101 btn-rd" type="submit">
							Submit
						</button>
					</form>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>

<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jqBootstrapValidation.js"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/formHandler.js?7460"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/lazysizes.min.js" defer></script>

<!-- Additional JS END -->


</body>
</html>
