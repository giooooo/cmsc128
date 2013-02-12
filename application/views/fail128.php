<html>
	<head><title>CMSC 128 Example</title></head>
	<body>
		<?php
			echo "Something went terribly wrong! Try again. :(";
		
		?>
		
		
		
		<?php $this->load->helper('url'); ?>
		<?php echo anchor('welcome/index', 'Home'); ?>
	</body>
</html>