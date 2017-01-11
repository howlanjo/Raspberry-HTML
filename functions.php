<?php
	include('includes/class-theme-methods.php');

	function do_main_nav() {
		global $dtm;
		
		$class = "main_nav";
		
		$items_array = array ( 
									array('text' => 'Home', 'url' => 'Home.php'),
									array('text' => 'Coffee Maker', 'url' => 'Item1.php'),
									array('text' => 'Light Bulb', 'url' => 'Item2.php'),
									array('text' => 'Thermostat', 'url' => 'Item3.php'),
									array('text' => 'Stove', 'url' => 'Item4.php')
								);
		
		return $dtm->navigation($items_array, $class);
	}
	
	function do_html_title($page_title) {
		$title = $page_title;
		
		return $title;
	}
?>