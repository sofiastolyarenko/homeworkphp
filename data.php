<?php
$buttonDisplay = "none";
$userName = "admin";
if ($userName == "admin") {
	$buttonDisplay = "inline"; 
}
else {
	$buttonDisplay = "none";
}
	class Post {
		private $title;
		private $text;
		private $autor;
		private $image;
		private $link;

		function __construct($title, $text, $autor, $image, $link) {
			$this->title = $title;
			$this->text  = $text;
			$this->autor = $autor;
			$this->image = $image;
			$this->link  = $link;
			
			}

		public function get_title() {
			return $this->title;
		}

		public function set_title($title) {
			$this->title = $title;
		}

		public function get_text() {
			return $this->text;
		}
		
		public function get_image() {
			//var_dump ($this->image);
			return $this->image;
		}
		
		public function get_autor() {
			return $this->autor;
		}

		public function get_link() {
			return $this->link;
		}

		public function preview() {
			if (strlen($this->text) > 199) {
				return substr($this->text, 0, 199) . '...'; 
		}
		return $this->text;
		}
	}

	/*$images = array(
		'1.jpg', '2.jpg', '3.jpg'
		);

	$link = array(
		'art1.html', 'art2.html', 'art3.html'
		);*/