<?php session_start(); ?>
<html>
	<body>
		<p>
			<?php
				echo "got here";
				echo "My favorite color is " . $_SESSION['favcolor'];
			?>
		</p>
	</body>
</html>