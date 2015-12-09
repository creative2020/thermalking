<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		Menu
		</button>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<?php wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		); ?>
	</div><!--/.nav-collapse -->
</nav>
