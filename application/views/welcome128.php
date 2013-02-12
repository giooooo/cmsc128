<html>
	<head><title>CMSC 128 Example</title></head>
	<body>
		<?php
			echo "<p align=\"center\">Aloha!\n</p></br>";


				$this->load->helper('form');
				echo form_open('welcome/process');
			?>
				<?php if (form_error('username') != NULL) echo "<font color=red size=2><b>username/email:</b></font>"; else echo "username/email:"; ?> <input type="text" name="username" maxlength="50" value="<?php echo set_value('username'); ?>" /><br />
				<?php if (form_error('password') != NULL) echo "<font color=red size=2><b>password:</b></font>"; else echo "password:"; ?><input type="password" name="password"  maxlength="30" value="<?php echo set_value('password'); ?>" /><br /><br />
				<input type="submit" value="Log In" name="logins" id="logins" /><br /><br />
			  </form>
			  <?php echo validation_errors(); ?>
			<?php $this->load->helper('url'); ?>
			<?php echo anchor('welcome/about_us', 'About us'); ?>
	</body>
</html>