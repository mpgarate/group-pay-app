<?php include 'header.php'; ?>
	<div class="row-fluid">
  	<div class="span6">
  	<?php echo $_SESSION['users[]'] ?>
			<form class="inline-form" action="split_review.php">
				<fieldset>
					<label>
						<img src="http://placekitten.com/25/25" />
						<span>John Smith</span>
						<input type="text" placeholder="$">
					</label>
					<label>
						<img src="http://placekitten.com/25/25" />
						<span>John Smith</span>
						<input type="text" placeholder="$">
					</label>
					<label>
						<img src="http://placekitten.com/25/25" />
						<span>John Smith</span>
						<input type="text" placeholder="$">
					</label>
					<label>
						<span>Total Amount</span>
						<input type="text" placeholder="$" class="total-amount">
					</label>
				<label class="checkbox" class="split-evenly">
					<input type="checkbox">
					<span>Split Evenly</span>
				</label>
				</fieldset>
			</form>
				<a href="split_review.php" class="btn btn-primary">Proceed</a>
		</div><!-- .span6 -->
	</div><!-- .row-fluid -->
<?php include 'footer.php';	?>