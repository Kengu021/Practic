<?php

include('linkdb.php');

class prod_post extends linkBd{

	function post_push(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
					or die(mysqli_error($link));

		if(is_numeric($_POST['price'])){

			$price = $_POST['price'];
			$coment = $_POST['coment'];
			$p_name = $_POST['post_name'];
			$file = $_POST['file'];

			$email = $_SESSION['loged_user'];
			$email = '111';


			mysqli_query($link, "INSERT INTO `posts` VALUES(NULL, '$email', '$p_name', '$price', '$coment', '$file')");

		}
	}
}

if(isset($_POST['add_post'])){

	$a = new prod_post;
	$a -> link();
	$a -> post_push();
}

?>