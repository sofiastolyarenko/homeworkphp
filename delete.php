<?php
	require_once './models/post.php';
	$post = new Post();

	if (!empty($_POST['id'])) {
		$post->delete($_POST['id']);
	}

	header('Location: /');