<div id="content">
	<div class="clear"></div>
	<div class="inner-content">
		<?php 
		if (!empty($error)) {
			echo $error;
		}?>

		<?php echo form_open_multipart('upload/do_upload');?>
		<input type="file" name="userfile" size="20" />
		<div>
		<label for="meeting_password">Meeting Password:</label>
		<input size="20" id="meeting_password" name="meeting_password"/>
		</div>
		<div>
		<label for="email">Email:</label>
		<input size="20" id="email" name="email"/>
		</div>
		<br /><br />

		<input type="submit" value="Create Meeting" />
		</form> <!-- End form for upload -->
	</div>
</div>