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
				<h1>This is the larger header</h1>
				<p>This goes below where the larger header.</p>
			</div>
			<div id="navigation">
				<?php echo do_main_nav(); ?>
			</div>