<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row" style="margin-top: 4rem;">
        <div class="col" style="max-width: 500px; margin-left: 30rem;">
            <div style="max-width: 300px;">
                <div class="container">
                    <h4>Имя пользователя</h4>
                    <div class="row">
                        <div class="col" style="margin-top: 2rem;"><a href="chenge_profil_main.php">Изменить профиль&nbsp;</a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 1rem;"><a href="post_form.php" style="margin-top: 2rem;">Добавить объявление</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div>
                <div class="container" style="margin-left: -7rem;">
                    <div class="row">
                        <div class="col">
                            <h5 style="margin-top: 0.4rem;">Ваши объявления</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 2rem;margin-left: -2rem;">
                            <?php
                                include('profil_main.php');
                            ?>
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