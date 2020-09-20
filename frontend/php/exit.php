<?php

	if(isset($_POST['exit'])){
		unset($_SESSION['loged_user']);
	}

if(isset($_SESSION['loged_user'])){

	header("location:http://maksfinishproduct/login.html");

}
	
?>