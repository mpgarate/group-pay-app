<?php include 'header.php'; ?>
	<?php include "navbar.php"; ?>
<div class="row">
	<div class="event-description"><strong><?php echo $_POST["event-description"]; ?> Split</strong></div>
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
	<div class="row">
		<div class="user-name"><strong>Total Amount:</strong></div>
			<div class="user-share" name="user3">$<?php echo $_POST["total-amount"]; ?></div>
	</div>
	<div class="row">
		<label><input type="submit" class="submit-button" value="Confirm Request" onClick="parent.location='/visa/form'"></label>
	</div>
	</div><!-- .users -->
</div><!-- .user-dues -->
<?php include 'footer.php'; ?>





</body>
</html>