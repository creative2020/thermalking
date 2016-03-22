<?php
$links = [
	"/windows/double-hung-windows/" => "Double Hung Windows",
	"/windows/sliding-windows/" => "Sliding Windows",
	"/windows/casement-windows/" => "Casement Windows",
	"/windows/bay-and-bow-windows/" => "Bay and Bow Windows",
	"/windows/garden-windows/" => "Garden Windows",
	"/siding/" => "Siding",
	"/doors/french-doors/" => "French Doors",
	"/doors/privacy-glass/" => "Privacy Glass",
	"/doors/clear-glass/" => "Clear Glass",
	"/doors/decorative-glass/" => "Decorative Glass",
	"/doors/no-glass/" => "No Glass",
	"/doors/patio-doors/" => "Patio Doors",
];
?>

<div class="row" style="margin-top: 2rem; margin-bottom: 2rem;">

<?php foreach($links as $link => $label) { ?>
	<a class="col-xs-6 col-sm-3" style="line-height: 2; font-size: 133%;" href="<?php echo $link; ?>"><?php echo $label; ?></a>
<?php } ?>

</div>

