<?php

	require_once './data.php';
	$post_dir = './posts';

	if (isset($_GET['title'])) {
		$title = $_GET['title'];
		$post_body = file_get_contents($post_dir . '/' . $title);
		$post = new Post($title, $post_body);

		echo $post->preview();
	} else {
		echo 'You need to set `title` get param!';
	}