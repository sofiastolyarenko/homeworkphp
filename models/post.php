<?php
	require_once 'db.php';

	class Post extends DB {
		public function __construct() {
			parent::__construct();
		}

		public function get_all() {
			$posts = $this->conn->query('SELECT * FROM posts');
			return $this->get_array($posts);
		}

		/*public function get_one($id) {
			$stmt = $this->conn->prepare("SELECT * FROM posts WHERE posts.id = ?");
			$stmt->execute(array($id));

			return $stmt->fetch();
		}

		public function create($title, $text) {
			$stmt = $this->conn->prepare("INSERT INTO posts (title, text) VALUES (?, ?)");
			$stmt->execute(array($title, $text));
		}

		public function delete($id) {
			$stmt = $this->conn->prepare("DELETE FROM posts WHERE posts.id = ?");
			$stmt->execute(array($id));
		}

		public function update($id, $title, $text) {
			$stmt = $this->conn->prepare("UPDATE posts SET title = ?, text = ? WHERE id =?");
			$stmt->execute(array($title, $text, $id));
		}*/
	}
