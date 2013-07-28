<?php include 'header.php'; ?>
	<?php include "navbar-next.php"; ?>
<form class="inline-form" action="review.php" method="post">
<div class="row">
	<input type="text" class="top-input" name="person-search" placeholder="Search">
</div>
	<fieldset class="user-list">
	<div class="row">
		<img src="img/face.png" />
		<div class="user-name">John Smith</div>
	</div>
	<div class="row">
		<img src="img/face.png" />
		<div class="user-name">Jeff Jones</div>
	</div>
	<div class="row">
		<img src="img/face.png" />
		<div class="user-name">Rob Dole</div>
	</div>
	</fieldset>
</form>
<?php include 'footer.php'; ?>