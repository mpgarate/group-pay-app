<?php include 'header.php'; ?>

<div class="navbar">
<a href="/visa/form/" class="left">Home</a>
<a href="/visa/form/split.php" class="right">Next</a>
</div>

<form class="inline-form" action="review.php" method="post">
<div class="row">
	<input type="text" class="person-search top-input" name="person-search" placeholder="Search Contacts">
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