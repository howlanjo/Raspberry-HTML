<?php include('header.php'); ?>
			<div id="content">
				<div id="main">
					<h2><?php echo $the_title; ?></h2>
					<p><?php echo $ImageLocation; ?></p>
					<p>
					<?php 
					if (file_exists($ImageLocation)) 
					{
						echo "Yes, the file was found.";
					}
					else
					{
						echo "No, the files was NOT found.";
					}
					?></p>
					<center><img src="Photos/LightBulbs.jpg" alt="Invalid Photo" ></center>
				</div>
				<?php
				$the_content = $the_content;
				include('sidebar.php'); ?>
			</div>
<?php include('footer.php'); ?>