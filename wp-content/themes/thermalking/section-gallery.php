<?php
	$dirs_to_scan = [
		 'wp-content/gallery/sugarcreek-industries',
		 'wp-content/gallery/sugarcreek-industries-windows',
		 'wp-content/gallery/alside-siding',
	];
	$image_paths = [];
	foreach ( $dirs_to_scan as $d ) {
		foreach ( scandir ( $_SERVER['DOCUMENT_ROOT'].'/'.$d ) as $i ) {
			if ( is_file ( $_SERVER['DOCUMENT_ROOT'].'/'.$d.'/'.$i ) )
				$image_paths[] = $d.'/'.$i;
		}
	}
	$subset = [];
	foreach ( array_rand ( $image_paths, 6 ) as $i ) {
		$subset[] = $image_paths[$i];
	}
?>
<div class="row">

<?php while ( $image_path = array_pop($subset) ) { ?>
<div class="col-xs-6 col-sm-2">
	<a href="/<?php echo $image_path; ?>"><div style="height: 12rem;
		background-image: url('<?php echo '/' . $image_path; ?>');
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;"></div></a>
</div>
<?php } ?>

</div>
