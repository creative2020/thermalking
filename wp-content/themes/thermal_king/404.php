<?php get_header(); ?>
  <div id="inside">
    <div class="header"></div>
    <div id="sidebar">
      <div id="consultation">
        <?php include (TEMPLATEPATH . '/consultation.php'); ?>
      </div>
      <div id="gallery">
        <h2>Gallery</h2>
        <ul>
          <li><a href="#">Windows</a></li>
          <li><a href="#">Doors</a></li>
          <li><a href="#">Siding</a></li>
        </ul>
      </div>
    </div>
    <div id="content">
      <h1>Page Not Found</h1>
      <p>The page you are looking for no longer exists.</p>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>