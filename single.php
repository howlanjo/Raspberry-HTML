<?php include('header.php'); ?>
<?php include('footer.php'); ?>
<div id="content">
	<div id="main">
		<h2><?php echo $the_title; ?></h2>
		<?php
		echo '<img src="'.$ImageLocation.'" alt="Invalid Photo" />';
		?>
	</div>
	<?php
	$the_content = $the_content;
	include('sidebar.php'); ?>
</div>