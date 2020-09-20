<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="../main.php">Company Name</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <form class="form-inline" style="margin-left: 46rem;">
                        <div></div>
                    <?php

                    if(isset($_SESSION['loged_user'])){

                        include('html/nav_button_prof.html');

                    }
                    else{

                        include('html/nav_button.html');
                    }
                    ?>

                    </form>
                </div>
            </div>
        </nav>
        <div style="margin-top: 1rem;">
            <div class="container">
                <div class="row">
                    <div class="col" style="max-width: 13rem;">
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(146,240,247);color: rgb(6,4,4);">Выберите категорию&nbsp;</button>
                            <div class="dropdown-menu"
                                role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </div>
                    </div>
                    <div class="col" style="margin-right: -1rem;"><input type="text" style="min-width: 36rem;min-height: 40px;background-color: rgb(255,255,255);"></div>
                    <div class="col" style="max-width: 12rem;margin-right: -1rem;">
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="color: #20201f;background-color: #92f0f7;">Выберите город</button>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </div>
                    </div>
                    <div class="col"><button class="btn btn-primary" type="button" style="background-color: #92f0f7;color: #20201f;">найти</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>