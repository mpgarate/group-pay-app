<?php 
			session_start();
			$_SESSION['favcolor'] = 'green';
			chroot ('/visa/');
		?>
<!DOCTYPE html>
<html>
<head>
<!-- Twitter Bootstrap -->
<meta charset="utf-8">
<title>Group Pay App</title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
	<body>
	<div class="container">
	<?php include 'navbar.php'; ?>