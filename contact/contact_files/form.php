<div class="contactformbutton">
	<fieldset>

		<legend>Send me an email</legend>

		<form name="contactme" class="contactme" id="contactme" action="" method="post">
			<p>
			 
			<br />
				<label for="fname" id="fname_label">First Name *</label><input type="text" name="fname" id="fname" size="30" maxlength="100" value="" />
			 
			<br />
			    <label for="email" id="email_label">Email *</label><input type="text" name="email" id="email" size="30" maxlength="100" value="" /> 
			 
			<br />
			    <label for="message" id="message_label">Message *</label><textarea rows="10" cols="10" name="message" id="message"></textarea>
			<br />
			<br />
			 	<label for="captcha" id="captcha_label"><img src="contact_files/nb/<?php echo $no1; ?>.gif" alt="" /> <span style="position:relative; top:-3px;">+</span> <img src="contact_files/nb/<?php echo $no2; ?>.gif" alt="" /> <span style="position:relative; top:-3px;">= </span></label><input type="text" name="captcha" id="captcha" size="10" maxlength="2" /> 
			<br />    
				<input type="reset" name="reset" value="Reset" />
				<input type="submit" name="submit" value="Send" />
			    <span style="position:relative; left:150px; top:5px;"><a href="http://www.scriptgenerator.net/78/HTML-PHP-jQuery-ContactForm-v2/" title="" style="border:0px;"><img style="border:0px" border="0" src="http://www.scriptgenerator.net/generator/contactme_v2/contact_files/img/ok.png" width="16" height="16" alt="Valid Contact Form" /></a></span>
			</p>
		</form>

		<!-- We will output the results from process.php here -->
		<div id="results"></div>
	</fieldset>
</div>