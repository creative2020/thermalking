<div class="row">

<?php
$the_query = new WP_Query( [ 'category_name' => 'homepage', 'posts_per_page' => 3 ] );
while ( $the_query->have_posts() ) {
$the_query->the_post();
?>

<a href="<?php the_permalink(); ?>">
<div class="col-sm-4 home-post-container">
	<h2 class="title"><?php the_title(); ?></h2>
	<?php the_post_thumbnail(/* 'post-thumbnail', [] */); ?>
</div>
</a>

<?php
}
wp_reset_postdata();
?>

</div>
