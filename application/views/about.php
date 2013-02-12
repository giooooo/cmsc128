<html>
	<head><title>CMSC 128 Example</title></head>
	<body>
		<?php
			echo "<p align=\"center\">Aloha!\n</p></br>";
		?>
			<?php
				echo "Adoo doo doo. Ada da da!\\n";
			?>
			<?php $this->load->helper('url'); ?>
			<?php echo anchor('welcome/index', 'Home'); ?>
		
	</body>
</html>