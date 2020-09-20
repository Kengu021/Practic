<?php
session_start();

include('linkdb.php');


class chenges_profile extends linkBd{


	function change(){

		$name = $_POST['change_name'];
		$email = $_POST['change_email'];
		$password_old = $_POST['old_pass'];
		$password_new = $_POST['new_pass'];
		$password_rep = $_POST['new_pass_rep'];

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
			or die(mysqli_error($link));

		$id = $_SESSION['loged_user'];

		if (strlen($name) > 0){
			$chenge_name = mysqli_query($link, "UPDATE `user acounts` SET `user_name`= '$name' WHERE `email` = '$id'");
			echo "Ваше имя успешно изменено";
		}



		if(strlen($password_old) > 0
				and strlen($password_new) > 0
				and strlen($password_rep) > 0 )
		{
			$result_check = mysqli_query($link, "SELECT `password` FROM `user acounts` WHERE `email` = '$id' ");
			$arr = mysqli_fetch_assoc($result_check);


			$password = md5($password_new."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");

			$password_check = md5($password_old."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");


			if($password_check == $arr['password']){

				if(strlen($password) > 8 or strlen($password) < 16)
				{
					if($password_new == $password_rep){

						$chenge_password = mysqli_query($link, "UPDATE `user acounts` SET `password` = '$password' WHERE `email` = '$id' ");
						echo "Пароль успешно изменён";
					}
					else{
						echo "Повторный пароль не соответствует";
					}
				}
				else{
					echo "измените пароль";
				}
			}
			else{
				echo "не верно указан старый пароль";
			}
		}


		if($email){
			$chenge_email = mysqli_query($link, "UPDATE `user acounts` SET `email` = '$email' WHERE `email` = '$id' ");
			echo "Ваша почта изменена";
		}

	}
}
print_r($_POST);
if(isset($_POST['add_change'])){
	$a = new chenges_profile;
	$a -> link();
	$a -> change();
}



?>