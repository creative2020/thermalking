<?php
/*
Template Name: Appointment
*/
?>
<?php get_header(); ?>

<div id="inside">
  <div class="header"></div>
  <div id="sidebar">
    <div id="consultation">
      <?php include (TEMPLATEPATH . '/consultation.php'); ?>
    </div>
    <div id="gallery">
      <?php include (TEMPLATEPATH . '/gallery_widget.php'); ?>
    </div>
  </div>
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <p>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    </p>
    <?php endwhile; endif; ?>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    <div id="form">
      <form action="/thermalking_appointment_mailer.php" method="post" onsubmit="return rsv.validate(this, rules)">
        <input type="hidden" name="form_tools_form_id" value="4" />
        <div class="left">
          <p>
            <label>First Name:</label>
            <input name="first_name" type="text" class="input" id="first_name" tabindex="1" />
          </p>
          <p>
            <label>Address 1:</label>
            <input name="address_1" type="text" class="input" id="address_1" tabindex="3" />
          </p>
          <p>
            <label>City:</label>
            <input name="city" type="text" class="input" id="city" tabindex="5" />
          </p>
          <p>
            <label>Zip:</label>
            <input name="zip" type="text" class="input" id="zip" tabindex="7" />
          </p>
          <p>
            <label>*Phone:</label>
            <input name="phone" type="text" class="input" id="phone" tabindex="9" />
          </p>
        </div>
        <div class="right">
          <p>
            <label>Last Name:</label>
            <input name="last_name" type="text" class="input" id="last_name" tabindex="2" />
          </p>
          <p>
            <label>Address 2:</label>
            <input name="address_2" type="text" class="input" id="address_2" tabindex="4" />
          </p>
          <p>
            <label>State:</label>
            <select name="state" class="input_list" id="state" tabindex="6" >
              <option value="Select State" selected="selected">Select State</option>
              <option value="Alaska">Alaska</option>
              <option value="Arizona">Arizona</option>
              <option value="Arkansas">Arkansas</option>
              <option value="California">California</option>
              <option value="Colorado">Colorado</option>
              <option value="Connecticut">Connecticut</option>
              <option value="Delaware">Delaware</option>
              <option value="District of Columbia">District of Columbia</option>
              <option value="Florida">Florida</option>
              <option value="Georgia">Georgia</option>
              <option value="Hawaii">Hawaii</option>
              <option value="Idaho">Idaho</option>
              <option value="Illinois">Illinois</option>
              <option value="Indiana">Indiana</option>
              <option value="Iowa">Iowa</option>
              <option value="Kansas">Kansas</option>
              <option value="Kentucky">Kentucky</option>
              <option value="Louisiana">Louisiana</option>
              <option value="Maine">Maine</option>
              <option value="Maryland">Maryland</option>
              <option value="Massachusetts">Massachusetts</option>
              <option value="Michigan">Michigan</option>
              <option value="Minnesota">Minnesota</option>
              <option value="Mississippi">Mississippi</option>
              <option value="Missouri">Missouri</option>
              <option value="Montana">Montana</option>
              <option value="Nebraska">Nebraska</option>
              <option value="Nevada">Nevada</option>
              <option value="New Hampshire">New Hampshire</option>
              <option value="New Jersey">New Jersey</option>
              <option value="New Mexico">New Mexico</option>
              <option value="New York">New York</option>
              <option value="North Carolina">North Carolina</option>
              <option value="North Dakota">North Dakota</option>
              <option value="Ohio">Ohio</option>
              <option value="Oklahoma">Oklahoma</option>
              <option value="Oregon">Oregon</option>
              <option value="Pennsylvania">Pennsylvania</option>
              <option value="Rhode Island">Rhode Island</option>
              <option value="South Carolina">South Carolina</option>
              <option value="South Dakota">South Dakota</option>
              <option value="Tennesse">Tennessee</option>
              <option value="Texas">Texas</option>
              <option value="Utah">Utah</option>
              <option value="Vermont">Vermont</option>
              <option value="Virginia">Virginia</option>
              <option value="Washington">Washington</option>
              <option value="West Virginia">West Virginia</option>
              <option value="Wisconsin">Wisconsin</option>
              <option value="Wyoming">Wyoming</option>
            </select>
          </p>
          <p>
            <label>Email:</label>
            <input name="email_address" type="text" class="input" id="email_address" tabindex="8" />
          </p>
          <p>
            <label>Best time to call:</label>
            <input name="time" type="text" class="input" id="time" tabindex="10" />
          </p>
        </div>
        <div class="clear"></div>
        <p><strong>I am interested in:</strong></p>
        <p>
          <input name="replacement_windows" type="checkbox" value="Replacement Windows" tabindex="11" />
          Replacement Windows </p>
        <p>
          <input name="new_windows" type="checkbox" value="New Windows" id="new_windows" tabindex="12" />
          New Windows </p>
        <p>
          <input name="vinyl_siding" type="checkbox" value="Vinyl Siding" id="vinyl_siding" tabindex="13" />
          Vinyl Siding </p>
        <p>
          <input name="reduce_bill" type="checkbox" value="Reduce Energy Bill" id="reduce_bill" tabindex="14" />
          Reduce My Energy Bill </p>
        <p><strong>Schedule a time:</strong></p>
        <p>During the week</p>
        <p>
          <input type="radio" name="schedule_time" value="10am" id="10am" />10am on
          <input type="radio" name="ten_am" value="Monday" id="10am_0" />M
          <input type="radio" name="ten_am" value="Tuesday" id="10am_1" />TU
          <input type="radio" name="ten_am" value="Wednesday" id="10am_2" />W
          <input type="radio" name="ten_am" value="Thursday" id="10am_3" />TH
          <input type="radio" name="ten_am" value="Friday" id="10am_4" />F
        </p>
        <p>
          <input type="radio" name="schedule_time" value="2pm" id="2pm" />2pm on
          <input type="radio" name="two_pm" value="Monday" id="10am_0" />M
          <input type="radio" name="two_pm" value="Tuesday" id="10am_1" />TU
          <input type="radio" name="two_pm" value="Wednesday" id="10am_2" />W
          <input type="radio" name="two_pm" value="Thursday" id="10am_3" />TH
          <input type="radio" name="two_pm" value="Friday" id="10am_4" />F
        </p>
        <p>
          <input type="radio" name="schedule_time" value="5pm" id="5pm" />5pm on
          <input type="radio" name="five_pm" value="Monday" id="10am_0" />M
          <input type="radio" name="five_pm" value="Tuesday" id="10am_1" />TU
          <input type="radio" name="five_pm" value="Wednesday" id="10am_2" />W
          <input type="radio" name="five_pm" value="Thursday" id="10am_3" />TH
          <input type="radio" name="five_pm" value="Friday" id="10am_4" />F
        </p>
        <p>
          <input type="radio" name="schedule_time" value="8pm" id="8pm" />8pm on
          <input type="radio" name="eight_pm" value="Monday" id="10am_0" />M
          <input type="radio" name="eight_pm" value="Tuesday" id="10am_1" />TU
          <input type="radio" name="eight_pm" value="Wednesday" id="10am_2" />W
          <input type="radio" name="eight_pm" value="Thursday" id="10am_3" />TH
          <input type="radio" name="eight_pm" value="Friday" id="10am_4" />F
        </p>
        <p>Saturday</p>
        <p>
          <input type="radio" name="schedule_time" value="9am Saturday" id="9am_saturday" />9am Saturday
          <input type="radio" name="schedule_time" value="12pm Saturday" id="12pm_saturday" />12pm Saturday
        </p>
        <p>Someone will call to confirm your appointment.</p>
        <p>
          <input name="submit" type="submit" id="submit" value="Submit" class="submit_btn" tabindex="15" />
        </p>
      </form>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<?php get_footer() ?>
