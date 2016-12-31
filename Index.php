<?php
	$the_title = 'Home';
	$the_content = "This is the home page. This is where all the overview information will be displayed.";
	
	if (file_exists($ImageLocation)) 
	{
		echo "Yes, the file was found.";
	}
	else
	{
		echo "No, the files was NOT found.";
	}
	
	$ImageLocation = "Photos/HomePhoto.jpg";
?>

<?php include('single.php'); ?>