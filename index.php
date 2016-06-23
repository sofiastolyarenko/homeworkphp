<?php 
    require_once './data.php';

    $user = 'root';
    $pass = '';

    $connect = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);
    $result = $connect->query('SELECT * FROM posts');

    $posts = array();
    foreach($result as $row) {
		
        $posts[] = new Post($row['title'], $row['text'], $row['autor'], $row['image'], $row['link']);
    }

    require_once 'view/index.php';