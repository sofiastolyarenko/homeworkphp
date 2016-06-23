<?php
	if (isset($_GET['id'])) {
		$user = 'root';
		$pass = '';	
		$connect = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);

		$stmt = $connect->prepare("SELECT * FROM posts WHERE posts.id = :id");
		$stmt->bindParam(':id', $id);

		$id = $_GET['id'];
		$stmt->execute();

		$post = $stmt->fetch();

		require_once 'view/update.php';
	} elseif (isset($_POST['title']) && isset($_POST['text'])) {
		$user = 'root';
		$pass = '';	
		$connect = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);

		$stmt = $connect->prepare("UPDATE posts SET title = :title, text = :text WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':text', $text);

		$id = $_POST['id'];
		$title = $_POST['title'];
		$text = $_POST['text'];
		
		$stmt->execute();
	} else {
		echo 'wrong request';
	}
	
	