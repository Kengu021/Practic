<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin_panel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="php/newRights.php">
</head>

<body>
    <div style="margin-top: 6rem;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <div class="row">
                            <div class="col" style="background-color: #5c5c5c;">
                                <h4 style="color: rgb(232,232,232);">Все пользователи</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="text" style="min-width: 18rem;margin-top: 1.4rem;margin-left: 1rem;"></div>
                            <div class="col" style="margin-left: -1rem;"><button class="btn btn-primary" type="button" style="margin-top: 1rem;background-color: #92f0f7;color: #20201f;">найти</button></div>
                        </div>
                        <div class="row" style="margin-top: 2rem;">
                            <div class="col">
                                <?php

                                	include('accounts_view.php');

                                	$a = new admin;
                                	$a -> return_inf();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="margin-top: 0.1rem;font-size: 20px;">
                        <p style="background-color: #87d5c6;">Всего пользователей
                        		<?php
                        			$a -> counter();
                        		?>
                        </p>
                    </div>
                    <div style="margin-top: 2rem;">
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Изменить пользотеля&nbsp;</button>
                            <div class="dropdown-menu" role="menu">
                                <form action="php/newRights.php" method="post">
                                    <div>
                                        <p style="margin-left: 1rem;margin-right: 1rem;margin-top: 1rem;">Введите email пользователя которого хотите изменить</p><input class="form-control" type="text" name="email_root" style="max-width: 20rem;margin-left: 1rem;">
                                        <div class="form-row" style="margin-top: 1rem;margin-bottom: 1rem;">
                                            <div class="col" style="margin-left: 1rem;"><button class="btn btn-primary" type="submit" name="create_admin">Сделать Admin</button></div>
                                            <div class="col"><button class="btn btn-primary" type="submit" name="create_user">Сделать User</button></div>
                                            <div class="col"><button class="btn btn-primary" type="submit" name="delete">Удалить</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>