<?php
//Include authentication
require("process/auth.php");

//Include database connection
require("config/db.php");

//Include class Voting
require("classes/Voting.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTING SYSTEM</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style_voter.css">
     <style>
     .hola{

        margin-top: 150px;
     }

body {
    background-color: #e4d8d8;
    
}
.jumbotron h1{color: #a04242;}
.jumbotron h2{color: #a04242;}
.navbar-inverse .navbar-nav>li>a
{color: #cec4c4;}
.navbar-inverse .navbar-brand
{ color:#cec4c4;}
.navbar-inverse .navbar-text
{
    color: #928c8c;
}



</style>
</head>
<body>

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
            <a class="navbar-brand" href="stud_page.php"><span class="glyphicon glyphicon-home"></span> VOTING SYSTEM</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="stud_page.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="process/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->




<?php
$readOrganization = new Voting();
$rtnReadOrg = $readOrganization->READ_ORG();
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 style="text-align: center;">Select Organization</h3><hr />
            <h4>Welcome <?php echo $_SESSION['NAME']; ?></h4>
            <?php if($rtnReadOrg) { ?>
            <form action="voting_page.php" method="GET" role="form">
                <div class="form-group">
                    <label for="organization">Organization</label>
                    <select required class="form-control" name="organization">
                        <option value="">*****Select Organization*****</option>
                        <?php while($rowOrg = $rtnReadOrg->fetch_assoc()) { ?>
                        <option value="<?php echo $rowOrg['org']; ?>"><?php echo $rowOrg['org']; ?></option>
                        <?php } //End while ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
                </div>
            </form>
                <?php $rtnReadOrg->free(); ?>
            <?php } //End if ?>
        </div>
    </div>
</div>
<center>
<h1 class="hola">STEP BY STEP GUIDE HOW TO VOTE</h1>

<button onclick="typeWriter()">Click me</button>

<p id="demo"></p>
<script>
var i = 0;
var txt = 'Select organization you want to vote.';

var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
</center>






<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    <div class="container">
        <div class="navbar-text pull-left">
           Copyright 2017 &copy; Horeb Edward & Ammar Rajpoot (University Of Lahore)
        </div>
    </div>

</nav>
<!-- End Footer -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>