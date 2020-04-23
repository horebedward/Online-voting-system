<?php
//Start session
session_start();

unset($_SESSION['ID']);
unset($_SESSION['NAME']);
unset($_SESSION['COURSE']);
unset($_SESSION['YEAR']);
unset($_SESSION['STUD_ID']);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style_voter.css">

     <style>
     .card img{

      width: 100%;
     }
     html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.column1 {
  float: right;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column1 {
    width: 100%;
    display: block;
  }
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


.button1 {
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
  width: 20%;
}

.button1:hover {background-color: #3e8e41}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

    .hola button {
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

hola button:hover {background-color: #3e8e41}

.hola button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
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
     .hola{

        margin-top: 100px;
     }

     .alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
     * {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
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
            <a class="navbar-brand" href="index.php">Voting Sytem</a>
        </div>

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Danger!</strong> Don't use others registration no.kyun ky upar wala sub dekh rha h.
</div>





<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-con">
                <h3>Student Log-in</h3><hr>
                <?php
                if(isset($_SESSION['ERROR_MSG_ARRAY']) && is_array($_SESSION['ERROR_MSG_ARRAY']) && COUNT($_SESSION['ERROR_MSG_ARRAY']) > 0) {
                    foreach($_SESSION['ERROR_MSG_ARRAY'] as $msg) {
                        echo "<div class='alert alert-danger'>";
                        echo $msg;
                        echo "</div>";
                    }
                    unset($_SESSION['ERROR_MSG_ARRAY']);
                }
                ?>
                <form method="post" action="process/login.php" role="form">
                    <div class="form-group has-warning has-feedback">
                        <label for="stud_id">Student ID</label>
                        <input type="text" name="stud_id" id="stud_id" class="form-control" autocomplete="off">
                        
                        
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                        <button type="submit" name="submit" class="button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



<center>
<h1 class="hola">STEP BY STEP GUIDE HOW TO VOTE</h1>

<button onclick="typeWriter()">Click me</button>

<p id="demo"></p>
<script>
var i = 0;
var txt = 'Login as voter using student ID No.';

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
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../assets/images/download.png" alt="" style="width:100%">
      <div class="container">
        <h2>HOREB EDWARD</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>horebedward@outlook.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>AMMAR LIAQAT</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>ammarliaqat3939@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
</div>









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