<?php

require "db.config.php";
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "insert into users(name,email,phone,password)values('".$name."','".$email."','".$phone."','".$password."')";
  echo $sql;
  if(mysqli_query($con,$sql))
  {
      header("location:login.php");
  }
  else
  {
    echo "<script>alert('Something went wrong.')</script>";
  }
}





?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 15:12:56 GMT -->
<head>
    <title>Sign Up </title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form action="" method="POST">
                <img src="images/logo.png" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" required class="validate" name="name">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" required class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="phone" type="text" required class="validate" name="phone">
                        <label for="phone">Phone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" required class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn-large btn-log-in" name="submit">Sign Up</button>
                    </div>
                </div>
                <a href="login.php" class="for-pass">Login Here ?</a>
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 15:12:57 GMT -->
</html>