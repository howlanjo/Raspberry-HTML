<?php include('header.php'); ?>
			<div id="content">
				<div id="main">
					<h2><?php echo $the_title; ?></h2>
					<p><?php echo $ImageLocation; ?></p>
					<center><img src=$ImageLocation alt="Invalid Photo" ></center>
				</div>
				<?php
				$the_content = $the_content;
				include('sidebar.php'); ?>
			</div>
<?php include('footer.php'); ?>