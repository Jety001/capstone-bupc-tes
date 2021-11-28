<?php
 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Home"; 
 $header=$view; 
switch ($view) {
	default :
		$content = 'content.php';		
}
require_once  ("../../theme/template.php");
?>