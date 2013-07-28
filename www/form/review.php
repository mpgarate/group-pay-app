<?php include 'header.php'; ?>

<div class="navbar">
<a href="/visa/form/split.php" class="left">Back</a>
</div>

<div class="row">
	<div class="event-description"><strong><?php echo $_POST["event-description"]; ?></strong></div>
</div>
<div class="user-dues">
	<div class="users">
	<div class="row">
		<img src="img/face.jpg" />
		<div class="user-name">John Smith</div>
			<div class="user-share" name="user1">$<?php echo $_POST["user1"]; ?></div>
	</div>
	<div class="row">
		<img src="img/face.jpg" />
		<div class="user-name">Jeff Jones</div>
			<div class="user-share" name="user2">$<?php echo $_POST["user2"]; ?></div>
	</div>
	<div class="row">
		<img src="img/face.jpg" />
		<div class="user-name">Rob Dole</div>
			<div class="user-share" name="user3">$<?php echo $_POST["user3"]; ?></div>
	</div>
	</div><!-- .users -->
	<div class="row">
		<div class="user-name"><strong>Total Amount:</strong></div>
			<div class="user-share" name="user3">$<?php echo $_POST["total-amount"]; ?></div>
	</div>
	<div class="row">
		<label><input type="submit" class="submit-button" value="Confirm Request" onClick="parent.location='/visa/form'"></label>
	</div>
</div><!-- .user-dues -->
<?php include 'footer.php'; ?>





</body>
</html>