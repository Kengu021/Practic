
<?php
        include('show_post.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>product_show</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>



<body>

    

    <div>
        <div class="container" style="position: relative; left: 4%;">
            <div class="row">
                <div class="col" style="margin-top: 4rem;">
                    <h4>
                        <?php
                            $a->show()->post_name();
                        ?>
                    &nbsp;</h4>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 2rem;min-height: 320px;">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="max-width: 500px;">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/full-hd-2560x1440-goroda.jpg"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/full-hd-2560x1440-goroda.jpg"></div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 3rem;">
                    <h5>Описание</h5>
                    <p style="margin-top: 2rem;">
                        <?php
                            $a -> show() -> coment();
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute;left: 55%;top: 20%;min-width: 350px;min-height: 250px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>
                        <?php
                            $a-> show()->price();
                        ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 2rem;">
                    <h4>
                        <?php
                            $a->show()->email();
                        ?>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p style="margin-top: 2rem;margin-left: 3rem;">описание продавца</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>