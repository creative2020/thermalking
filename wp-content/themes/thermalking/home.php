<?php get_header(); ?>

<style>
#home-header {
	background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/perfect-window.png');
	background-position: center;
	background-size: cover;
}
</style>

<div id="home-header" class="row">
	<div class="col-xs-12" style="">
		<span style="display: inline-block; color: white; background-color: #792a41; margin-top: 1.5in; margin-bottom: 1.5in; font-size: 200%; font-weight: bold;">The World's Only Perfect Window</span>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<?php get_template_part ( 'section', 'promise' ); ?>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<?php get_template_part ( 'section', 'a' ); ?>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<h1>Gallery of Windows, Doors &amp; Siding</h1>
	</div>
</div>
<?php get_template_part ( 'section', 'gallery' ); ?>

<div class="row">
	<div class="col-xs-12">
		<?php get_template_part ( 'section', 'links' ); ?>
	</div>
</div>

<?php get_footer(); ?>
