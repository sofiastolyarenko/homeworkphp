<?php
	if (!empty($_POST)) {
		$user = 'root';
		$pass = '';

		$connect = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);

		$stmt = $connect->prepare("INSERT INTO posts (title, text) VALUES (:title, :text)");
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':text', $text);

		$title = $_POST['title'];
		$text = $_POST['text'];
		$stmt->execute();
	}
	
?>

<html>
	<head>
		<title>My blog</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="col-md-10 col-md-offset-1">
			<div id="header">
				<h1>Enter the post</h1>
			</div>

			<div>
				<form method="POST" action="/new_post.php">
					<input type="text" name="title">
					<textarea name="text" class="form-control" rows="3"></textarea>

					<input type="submit" value="Send">

					<select name="colour">
						<option value="red">Red</option>
						<option value="green">Green</option>
						<option value="blue">Blue</option>
					</select>
				</form>
			</div>			

			<div id="footer">
				<p>hillel-itschool</p>
			</div>
		</div>
	</body>
</html>