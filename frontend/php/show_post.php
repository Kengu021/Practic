<?php

include('linkdb.php');

class show_post extends linkBd{


	function show (){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
				or die(mysqli_error($link));

		$key = array_key_first($_POST);

		$result = mysqli_query($link, "SELECT * FROM `posts` WHERE id_post = '$key' ");

		$array = mysqli_fetch_assoc($result);

		function price(){
			echo $array['price'] ;
		}

		function name(){
			echo $array['post_name'];
		}

		function coment(){
			echo $array['coment'];
		}

		function email(){
			echo $array['email'];
		}

	}
}

if(count($_POST) > 0){
	header("location: http://pabunen/Show_post.php");
}

$a = new show_post;
$a -> link();
$a -> show();


?>