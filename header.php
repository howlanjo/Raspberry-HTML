<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo do_html_title($the_title); ?></title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1>Howland Home Server System</h1>
				<p>From this website, you will be able to access and control certain decives within the home.</p>
			</div>
			<div id="navigation">
				<?php echo do_main_nav(); ?>
			</div>