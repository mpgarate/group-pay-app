<?php 
			session_start();
			$_SESSION['favcolor'] = 'green';
			chroot ('/visa/');
		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Group Pay App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Twitter Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

</head>
	<body>
	<?php include 'navbar.php'; ?>
	<div class="container-fluid">