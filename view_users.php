<?php require 'connect_to_db.php' ?>
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
            <a class="navbar-brand mr-auto" href="index.php"><img src="img/sparkslogo.png" width="50" height="50"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-sm"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutme.php"><span class="fa fa-info fa-sm"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="transfer.php"><span class="fa fa-retweet fa-sm"></span>Transactions</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        $sql = "SELECT * FROM usertable";
        $result = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row row-content">
                <div class="col-12 col-sm-6">
                    <h3>User Details</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>User mail</th>
                                    <th>Current Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(mysqli_num_rows($result) > 0){
                                        while($emp = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $emp['id']; ?></td>
                                    <td><?php echo $emp['u_name']; ?></td>
                                    <td><?php echo $emp['u_email']; ?></td>
                                    <td><?php echo $emp['credits']; ?></td>
                                </tr>
                                <?php
                                        }
                                    }
                                    else{
                                        echo "0 results";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-sm-6 align-self-center">
                    <h3 style="margin:20px auto;">Add User</h3>
                    <div class="col-12">
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label"><strong>User Name</strong></label>
                                    <div class="col-md-8">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="User Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mailid" class="col-md-4 col-form-label"><strong>Receiver Name</strong></label>
                                    <div class="col-md-8">
                                        <input type="email" name="mailid" id="mailid" class="form-control" placeholder="Mail id" required>
                                    </div>
                                </div>                                
                                <div class="form-group row">
                                    <div class="col-6 col-md-4 offset-md-4">
                                        <input type="submit" class="btn btn-primary" name="btnadd" value="Add">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-md-6">
                                        <a role="button" class="btn btn-primary" href="transfer.php">Make Transactions</a>
                                        <a role="button" class="btn btn-secondary" href="index.php">Back</a>
                                    </div>
                                </div>
                            </form>
                            <?php
                                if( isset($_POST['btnadd'])){
                                    $newuser = $_POST['username'];
                                    $newmail = $_POST['mailid'];
                                    $amount = 50;
                                    $sqlinsert = "INSERT INTO usertable (u_name, u_email, credits) VALUES ('$newuser','$newmail','$amount')";
                                    $res3 = mysqli_query($conn, $sqlinsert);
                                    if($res3){
                                       echo  "<script>alert('User Registered Successfully...')</script>";
                                    }
                                    else{
                                        echo "Failed to Insert:" . mysqli_error($res3);
                                    }
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="row-footer">
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