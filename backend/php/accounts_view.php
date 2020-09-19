<?php

include('linkdb.php');

class admin extends linkBd{


	function return_inf(){ // вывод информации об имеющихся аккаунтах в адм панель 

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
				or die(mysqli_error($link));

		$ruin = "admin";

		$result = mysqli_query($link, " SELECT `name`, `email` FROM `user acounts` WHERE name != 'admin' ");

		$array = array();

		$len = mysqli_num_rows($result);


		for($i=0; $len > $i ; $i++){

			array_push($array, mysqli_fetch_row($result));
		}


		echo "<div class='container'>";

		for ($i = 0; count($array) > $i; $i++){
			echo "
				<div class='row'>
				";
			$key = $array[$i];
			for($j=0; count($key) > $j;$j++){
		
				echo "
    				<div class='col-sm'>
     					".$key[$j]."
    				</div>
    			
				";
			}
			echo "</div>";
		}
		echo "</div>";
	}

	function counter(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
				or die(mysqli_error($link));

		$ruin = "admin";

		$result = mysqli_query($link, " SELECT `name`, `email` FROM `user acounts` WHERE name != 'admin' ");

 		echo mysqli_num_rows($result);


	}
}

?>