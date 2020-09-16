<?php require 'connect_to_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Credit Transfer</title>
</head>
<body>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="index.html"><img src="img/sparkslogo.png" width="50" height="50"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-sm"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutme.php"><span class="fa fa-info fa-sm"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="transfer.php"><span class="fa fa-retweet fa-sm"></span>Transactions</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header style="padding: 70px 30px 70px 30px; background-color:#CCD1D1">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-8 offset-sm-2">
                    <h1 style="color: #009688">CREDIT TRANSFER APPLICATION</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="row row-content">
        <div class="col-12 col-sm-4 offset-sm-4">
            <div class="card cardstyle" id="clanguage">
                <div class="card-header bg-secondary">
                    <div class="col-12 col-sm-4 offset-sm-4">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" style="margin: 0px 0px 0px 0px">
                        <div class="col-12 col-md-6">Details of Users</div>
                        <div class="col-12 col-md-6"><a role="button" class="btn btn-primary btn-block" href="view_users.php">View Users</a></div>
                    </div>
                    <div class="row" style="margin: 20px 0px 0px 0px">
                        <div class="col-12 col-md-6">Previous Transactions</div>
                        <div class="col-12 col-md-6"><a role="button" class="btn btn-primary btn-block" href="transfer.php">Transactions</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="row-footer fixed-bottom">
        <div class="container">
            <div class="row  justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 <a href="https://www.linkedin.com/in/vishnu-telakapalli-b91b601b0/" style="color:#85C1E9;">VishnuVardhan</a></p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>