<?php
	include('includes/class-theme-methods.php');

	function do_main_nav() {
		global $dtm;
		
		$class = "main_nav";
		
		$items_array = array ( 
									array('text' => 'Home', 'url' => 'HomePage.php'),
									array('text' => 'Item 1', 'url' => 'Item1.php'),
									array('text' => 'Item 2', 'url' => 'Item2.php'),
									array('text' => 'Item 3', 'url' => 'Item3.php'),
									array('text' => 'Item 4', 'url' => 'Item4.php')
								);
		
		return $dtm->navigation($items_array, $class);
	}
	
	function do_html_title($page_title) {
		$title = $page_title;
		
		return $title;
	}
?>