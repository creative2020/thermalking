<?php
/*
Template Name: Page
*/
?>
<?php get_header(); ?>
  <div id="inside">
    <div class="header"></div>
    <div id="sidebar">
      <div id="consultation"><h2>FREE Consultation</h2>
      <p class="consult text"><strong>Call <span class="pt_1">1.888.KingWin</span></strong> or fill out the form below for a <strong>free</strong> in-home consultation.</p>
        <?php gravity_form(1, false, false, false, '', false, 88); ?> </div>    
        
        <div id="gallery">
        <?php include (TEMPLATEPATH . '/gallery_widget.php'); ?>
      </div>
      <div id="testimonials">
        <?php include (TEMPLATEPATH . '/testimonials_widget.php'); ?>
      </div>
    </div>
    <div id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
      <h1><?php the_title(); ?></h1>
      <p>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </p>
      <?php endwhile; endif; ?>
      <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>