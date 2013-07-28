<?php include 'header.php'; ?>
	<div class="row-fluid">
		<div class="span">
			<form class="select_users">
				<input type="text" placeholder="Search">
				<label class="checkbox">
					<input type="checkbox" name="check_list[]">
					<img src="http://placekitten.com/25/25" />
					<span>John Smith 1</span>
				</label>
				<label class="checkbox">
					<input type="checkbox" name="check_list[]">
					<img src="http://placekitten.com/25/25" />
					<span>John Smith 2</span>
				</label>
				<label class="checkbox">
					<input type="checkbox" name="check_list[]">
					<img src="http://placekitten.com/25/25" />
					<span>John Smith 3</span>
				</label>
		</form>
		<?php
		if(!empty($_POST['check_list'])) {
		    foreach($_POST['check_list'] as $check) {
		            echo $check; //echoes the value set in the HTML form for each checked checkbox.
		                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
		                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
		    }
		}
			$_SESSION['users[]'] = $_POST['check_list'];
		?>
				<a href="split_amount.php" class="btn btn-primary">Select amount</a>
		</div>
	</div>
<?php include 'footer.php';	?>