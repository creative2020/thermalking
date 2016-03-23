<?php

function render_style_props($aspect, $aspect_total, $margin, $margin_total) {
	echo " width: calc( ( 100% - {$margin_total}rem ) * $aspect / $aspect_total );";
	echo " margin-left: {$margin}rem;";
	echo " margin-right: {$margin}rem;";
}

function render_style($id, $aspect, $aspect_subtotal, $aspect_total, $margin, $margin_subtotal, $margin_total) {
	echo "<style>";
	echo " #$id {";
	render_style_props($aspect, $aspect_subtotal, $margin, $margin_subtotal);
	echo " }";
	echo " @media only screen and (min-width : 768px) {";
		echo " #$id {";
		render_style_props($aspect, $aspect_total, $margin, $margin_total);
		echo " }";
	echo " }";
	echo " </style>";
}

function render_image($id, $url) {
	echo "<a href=\"$url\">";
	echo "<img id=\"$id\" class=\"section-gallary-image\" src=\"/$url\">";
	echo "</a>";
}

$dirs_to_scan = [
	 'wp-content/gallery/sugarcreek-industries',
	 'wp-content/gallery/sugarcreek-industries-windows',
	 'wp-content/gallery/alside-siding',
];
foreach ( $dirs_to_scan as $d ) {
	foreach ( scandir ( $_SERVER['DOCUMENT_ROOT'].'/'.$d ) as $i ) {
		if ( is_file ( $_SERVER['DOCUMENT_ROOT'].'/'.$d.'/'.$i ) )
			$image_paths[] = $d.'/'.$i;
	}
}
//randomly establish a set of 6
foreach ( array_rand ( $image_paths, 6 ) as $i ) {
	$image['path'] = $image_paths[$i];
	$dimensions = getimagesize($_SERVER['DOCUMENT_ROOT'].'/'.$image_paths[$i]);
	$image['aspect'] = $dimensions[0] / $dimensions[1];
	$subset[] = $image;
}
//calculate sums of aspect ratios (3, 3, and 6)
foreach ( $subset as $i => $image ) {
	$sum3[$i/3] += $image['aspect'];
	$sum6 += $image['aspect'];
}

//render things
foreach ( $subset as $i => $image ) {
	$id = uniqid('i');
	render_style($id, $image['aspect'], $sum3[$i/3], $sum6, 0.25, 1.5, 3);
	render_image($id, $image['path']);
}

?>
