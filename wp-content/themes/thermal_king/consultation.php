      <h2>FREE Consultation</h2>
      <p class="consult text"><strong>Call <span class="pt_1">1.888.KingWin</span></strong> or fill out the form below for a <strong>free</strong> in-home consultation.</p>
      <form action="/thermalking_consultation_mailer.php" method="post" onsubmit="return rsv.validate(this, rules)">
        <input type="hidden" name="form_tools_form_id" value="1" />
        <p>
          <input name="name" type="text" class="input" id="name" value="Name" onclick="if(this.value == 'Name') this.value = '';" onblur="if(this.value == '') this.value = 'Name';" /> 
          <span class="required">*</span>
        </p>
        <p>
          <input name="phone" type="text" class="input" id="phone" value="Phone Number" onclick="if(this.value == 'Phone Number') this.value = '';" onblur="if(this.value == '') this.value = 'Phone Number';" /> 
          <span class="required">*</span>
        </p>
        <p>
          <input name="email" type="text" class="input" id="email" value="Email" onclick="if(this.value == 'Email') this.value = '';" onblur="if(this.value == '') this.value = 'Email';" /> 
          <span class="required">*</span>
        </p>
		<p>
			<select class="input_list consult" name="hear" tabindex="10">
				<option value="Not Selected" selected="selected">How Did You Hear About Us?</option>
				<option value="Home Mag">Home Mag</option>
				<option value="Home Show">Home Show</option>
				<option value="Internet">Internet</option>
				<option value="Newspaper">Newspaper</option>
				<option value="Radio">Radio</option>
                <option value="Television">Television</option>
				<option value="Referral">Referral</option>
				<option value="Val-Pak">Val-Pak</option>
				<option value="Other">Other</option>
			</select>
		</p>
        <p>
          <input name="replacement_windows" type="checkbox" value="Replacement Windows" />
          Replacement Windows
        </p>
        <p>
          <input name="new_windows" type="checkbox" value="New Windows" id="new_windows" />
          New Windows
        </p>
        <p>
          <input name="vinyl_siding" type="checkbox" value="Vinyl Siding" id="vinyl_siding" />
          Vinyl Siding
        </p>
        <p>
          <input name="reduce_bill" type="checkbox" value="Reduce Energy Bill" id="reduce_bill" />
          Reduce My Energy Bill
        </p>
        <p>
          <input name="submit" type="submit" id="submit" value="SCHEDULE" class="submit_btn consult" />
        </p>
      </form>