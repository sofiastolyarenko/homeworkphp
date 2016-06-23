<?php 

	function get_params($param) {
		return $_GET[$param];
	}
	// $id = $_GET['id'];
	
	if (!empty($_GET)) {
		echo "string";
	}

	if (!empty($_POST)) {
		echo "string";
	}

	$query = $_POST['query'];
	// echo $query;
?>