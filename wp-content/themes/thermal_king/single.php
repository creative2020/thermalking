<?php get_header(); ?>
  <div id="inside">
    <div class="header"></div>
    <div id="sidebar">
      <div id="consultation">
        <?php include (TEMPLATEPATH . '/consultation.php'); ?>
      </div>
      <div id="blog_sidebar">
        <?php include (TEMPLATEPATH . '/blog_widget.php'); ?>
      </div>
    </div>
    <div id="content">
      <!--Breadcrumbs-->
      <p><?php the_breadcrumb(); ?></p>
  
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

      <!--Blog-->
      <div id="product">
        <div id="full">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php the_content('Continue reading  &raquo;'); ?>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
      </div>
      <!-- end item -->
      <?php comments_template(); // Get wp-comments.php template ?>
      <?php endwhile; ?>
      <div class="navigation">
      <div class="alignleft">
        <?php next_posts_link('&laquo; Previous Entries') ?>
      </div>
      <div class="alignright">
        <?php previous_posts_link('Next Entries &raquo;') ?>
      </div>
      <p></p>
    </div>
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>