<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid">

<div class="row">
	<div class="col-xs-12" style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap;">
		<a href="<?php echo home_url(); ?>"
			><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"
			style="width: 32rem; max-width: 100%; margin-top: 1rem;"></a>
		<p style="margin-bottom: 2em;">
			<a style="font-size: 250%;" href="tel:+1-913-451-2300"><b>913.451.2300</b></a>
		</p>
	</div>
</div>

<div class="row navbar-row">
	<div class="col-xs-12">
		<?php get_template_part( 'section', 'nav' ); ?>
	</div>
</div>
