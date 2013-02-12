<html>
	<head><title>CMSC 128 Example</title></head>
	<body>
		<?php
			echo "Success!!!\n";	
		?>
		<?php $this->load->helper('url'); ?>
		<?php echo anchor('welcome/index', 'Home'); ?>
	</body>
</html>