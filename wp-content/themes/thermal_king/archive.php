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
	  <div id="post">
        <div class="date"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></div>
        <div class="heading">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p>
            Posted in <?php the_category(', '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
          </p>
        </div>
        <div class="clear"></div>
        <div class="content">
          <?php the_content('Read More...'); ?>
        </div>
      </div>
      
      <div class="line"></div>
    
    <?php endwhile; ?>
    <?php endif; ?>
        
        <!--Pagination-->
        <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
    
    
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>