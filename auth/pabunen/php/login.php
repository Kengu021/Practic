<?php

include('linkdb.php');

class login extends linkBd{



	//оставить ниже  свои ссылки


	function log(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
				or die(mysqli_error($link));

		if(isset($_POST['email']) and isset($_POST['password'])){

			$email = $_POST['email'];
			$email = htmlentities($email);
			$password = $_POST['password'];

			//шифрование пароля 
			$password = md5($password."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");

			//проверека на наличие email в бд
			$check_id = mysqli_query($link, "SELECT * FROM `user acounts` WHERE email='".$email."'");
			$user = mysqli_fetch_assoc($check_id);

			if ($user)
			{
				//проверка на наличие пароля в бд
				$check_id = $user['user_id'];
				$check_password = mysqli_query($link, "SELECT password FROM `user acounts` WHERE user_id ='".$check_id."'");
				$check_password = mysqli_fetch_assoc($check_password);

				if ($check_password['password'] == $password)
				{
					$_SESSION['loged_user'] = $check_id;
					//переход на страницу и занесение email в глобальный массив
					//проверка на наличие прав пользователя 
					$user_name = $user['email']; 
					$check_user_rights = mysqli_query($link, "SELECT * FROM `user rights`
							WHERE email ='".$user_name."'");

					$check_user_rights = mysqli_fetch_assoc($check_user_rights);
					
					if ($check_user_rights){
							
							header('location: http://maksfinishproduct/adm_panel_1.php');//ссылка на админа
							exit();
						
					}
					else{

						echo "ты вошел";

						header('location: ### ;');//ссылка на mail_list
					}
					
				}
				else{
					echo "Не правильно набран пароль";
				}
			}
			else
			{
				echo "Не правильно набран email";
			}
			
		}

	}
}

if (isset($_POST['enter_log'])){
	$a = new login;
	$a -> link();
	$a -> log();
}
?>