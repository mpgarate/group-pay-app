<?php include 'header.php'; ?>

<div class="navbar">
<a href="/visa/form/" class="left">Back</a>
</div>

<form class="inline-form" action="review.php" method="post">
<div class="row">
	<input type="text" class="top-input" name="event-description" placeholder="Enter event description">
</div>
	<fieldset class="users">
	<div class="row">
		<img src="img/face.jpg" />
		<div class="user-name">John Smith</div>
			<input type="tel" class="user-share" name="user1">
	</div>
	<div class="row">
		<img src="img/face.jpg" />
		<div class="user-name">Jeff Jones</div>
			<input type="tel" class="user-share" name="user2">
	</div>
	<div class="row">
		<img src="img/face.jpg" />
		<div class="user-name">Rob Dole</div>
			<input type="tel" class="user-share" name="user3">
	</div>
	</fieldset>
	<fieldset>
	<div class="row">
		<label>
			<div>Total Amount</div>
			<input type="tel" class="total-amount" name="total-amount">
		</label>
	</div>
	<div class="row">
		<label class="checkbox split-evenly" class="split-evenly">
			<input type="checkbox">
			<span>Split Evenly</span>
		</label>
	</div>
		<label><input type="submit" class="submit-button"></label>
	</fieldset>
</form>
<?php include 'footer.php'; ?>