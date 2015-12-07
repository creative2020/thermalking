<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
  <div id="index">
    <div id="header">
      <?php echo do_shortcode('[metaslider id=691]'); ?>
    </div>
    <div id="side">
      <div id="consultation"><h2>FREE Consultation</h2>
      	<p class="consult text"><strong>Call <span class="pt_1">1.888.KingWin</span></strong> or fill out the form below for a <strong>free</strong> in-home consultation.</p>
      </div>
        <?php gravity_form(1, false, false, false, '', false, 88); ?>
        
    </div>
	<div id="boxes">
	  <div class="windows">
	    <a href="/windows/" title="Windows">
	      <h2>Windows</h2>
		  <p>Learn more about the triple glass advantage</p>
		</a>
	  </div>
	  <div class="doors">
	    <a href="/doors/" title="Doors">
	      <h2>Doors</h2>
		  <p>Make your entrance stand out and hold up</p>
		</a>
	  </div>
	  <div class="siding">
	    <a href="/siding/" title="Siding">
	      <h2>Siding</h2>
		  <p>Add appeal, value and durability</p>
		</a>
	  </div>
	</div>
	<div id="specials">
	  <h3>Internet Specials</h3>
	  <div class="content">
	    <p><strong>Windows</strong>, <strong>Doors</strong> and <strong>Siding</strong><br />special offers and discounts.</p>
		<div class="btn">
		  <a href="/specials/" title="Internet Specials"></a>
		</div>
	  </div>
	</div>
    <div id="main">
      <div id="left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
        <h1><?php the_title(); ?></h1>
        <p>
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </p>
        <?php endwhile; endif; ?>
      </div>
      <div id="right">
        <div class="left">
          <h2><a href="request-an-appointment/" alt="Request Appointment">Request Appointment</a></h2>
        </div>
        <div class="right">
          <a title="Thermal King Windows" class="lbp_secondary" href="http://www.youtube.com/embed/86J44kfi2dA"></a>
        </div>
        <div class="clear"></div>
        <div id="bottom">
          <div class="left_list">
            <?php include (TEMPLATEPATH . '/list_left_widget.php'); ?>
          </div>
          <div class="right_list">
            <?php include (TEMPLATEPATH . '/list_right_widget.php'); ?>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>
