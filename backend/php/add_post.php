<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>form_post</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="php/post_query.php">
</head>

<body>
    <div>
        <form action="php/post_query.php" method="post">
            <div class="container" style="margin-top: 5rem;margin-left: 7rem;position: relative;left: 15%;">
                <div class="form-row">
                    <div class="col">
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Выберите категорию</button>
                            <div class="dropdown-menu" role="menu">
                                <p>отображение категорий</p>
                                <p>Paragraph</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row" style="margin-top: 2rem;">
                    <div class="col">
                        <h5>Введите название объявления</h5><input class="form-control" type="text" name="post_name" style="max-width: 500px;margin-top: 1rem;"></div>
                </div>
                <div class="form-row" style="margin-top: 2rem;">
                    <div class="col">
                        <h5>Встасте фото&nbsp;</h5><input type="file" name="file" style="margin-top: 1rem;"></div>
                </div>
                <div class="form-row" style="margin-top: 2rem;">
                    <div class="col">
                        <h5>Описание</h5><input class="form-control" type="text" name="coment" style="max-width: 700px;margin-top: 1rem;"></div>
                </div>
                <div class="form-row" style="margin-top: 2rem;">
                    <div class="col">
                        <h5>Цена</h5><input class="form-control" type="text" name="price" style="max-width: 300px;margin-top: 1rem;"></div>
                </div>
                <div class="form-row" style="margin-top: 2rem;">
                    <div class="col"><button class="btn btn-primary" type="submit" name="add_post">Добавить</button></div>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>