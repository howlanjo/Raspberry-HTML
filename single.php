<?php include('header.php'); ?>
			<div id="content">
				<div id="main">
					<h2><?php echo $the_title; ?></h2>
					<p><?php echo $ImageLocation; ?></p>
					<center><img src=$ImageLocation style="width:200px;height:266px;"></center>
				</div>
				$the_content = $the_content;
				<?php include('sidebar.php'); ?>
			</div>
<?php include('footer.php'); ?>