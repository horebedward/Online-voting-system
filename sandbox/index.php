<?php
//Start session
session_start();

unset($_SESSION['ADMIN_ID']);
unset($_SESSION['ADMIN_NAME']);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_admin.css">
     <style>
     .button {
  padding: 7px 19px;
  font-size: 19px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #431012;
  background-color:#fefeff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
body {background-color: #21218f;
background: url(../assets/images/imgg.jpg) no-repeat fixed center; 



}
.navbar-inverse .navbar-brand
{
    color: #cec4c4;
    text-align: center;


}

    .navbar-inverse .navbar-text
    {
      color: #928c8c;  
    }
    h3{
        color: white;
    }
    label{
        color: white;
    }
    h1{
        color: white;
    }

    



</style>
</head>
<body >

<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ONLINE VOTING SYSTEM (DEPARTMENT OF COMPUTER ENGINEERING UNIVERSITY OF LAHORE)</a>
        </div>

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->





<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-con">
                <?php
                if(isset($_SESSION['ERROR_MSG_ARR']) && is_array($_SESSION['ERROR_MSG_ARR']) && count($_SESSION['ERROR_MSG_ARR']) > 0) {
                    foreach($_SESSION['ERROR_MSG_ARR'] as $msg) {
                        echo "<div class='alert alert-danger'>";
                        echo $msg;
                        echo "</div>";
                    }
                    unset($_SESSION['ERROR_MSG_ARR']);
                }
                ?>
                <h3>Administrator Log-in</h3><hr>
                <form method="post" action="process/login.php" role="form">
                    <div class="form-group has-feedback">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>








<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    <div class="container">
        <div class="navbar-text pull-left">
            Copyrights 2017 &copy; Horeb Edward & Ammar Rajpoot (University Of Lahore)
        </div>
    </div>

</nav>
<!-- End Footer -->

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>