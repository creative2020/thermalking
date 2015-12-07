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
      
	  <?php
    if(isset($_GET['author_name'])) :
        $curauth = get_user_by('slug', $author_name);
    else :
        $curauth = get_userdata(intval($author));
    endif;
    ?>

    <h1>Posts by <?php echo $curauth->nickname; ?></h1>
    <p>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <span class="small"><?php the_time('M d Y'); ?><br />
        Category: <?php the_category('&');?></span>
        <div class="line"></div>

    <?php endwhile; else: ?>
      <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>
    </p> 
    
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>