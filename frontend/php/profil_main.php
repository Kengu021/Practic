<?php

include('linkdb.php');

class profil_view extends linkBd{


    function return_form(){ // вывод информации об имеющихся аккаунтах в адм панель 

        $link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
                or die(mysqli_error($link));

        $email = $_SESSION['loged_user'];
        $email = '111';

        $result = mysqli_query($link, " SELECT * FROM `posts` WHERE email = '$email' ");

        $array = array();

        $len = mysqli_num_rows($result);


        for($i=0; $len > $i ; $i++){

            array_push($array, mysqli_fetch_row($result));
        }

        for ($i = 0; count($array) > $i; $i++){
            
            $key = $array[$i];

                $post_name = $key['2'];
                $price =$key['3'];
                $post_coment = $key['4'];
                $post_id = $key['0'];

                echo "
                <form action='php/Show_post_main_php' method='post'>
                    <div>
                        <div class='container'>
                            <div class='row' style='margin-top: 3rem;''>
                                <div class='col' style='max-width: 25rem;margin-left: 0rem;margin-top: 0rem;''><img src='assets/img/fon_main.jpg' style='max-width: 300px;max-height: 250px;'></div>
                                    <div class='col' style='max-width: 30rem;''>
                                        
                                        <button class='btn btn-primary' type='submit' name='$post_id' style='margin-left: 1rem;background-color: rgb(94,205,220);''><h1 style='margin-top: 0.5rem;font-size: 28px;''>$post_name</h1>
                                        </button>
                                            
                                        
                                    <p>$post_coment</p>
                                    <p>дата и время</p>
                                    <p>$price  руб</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                ";      
            
        }

    }

}

$a = new profil_view;
$a -> link();
$a -> return_form();