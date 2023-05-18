<?php

require "db.config.php";
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from users where email = '$email' and password='$password'";
  echo $sql;
  $res = mysqli_query($con,$sql);
  if($res->num_rows>0)
  {
      while ($row = mysqli_fetch_array($res))
      {
        $_SESSION['user'] = $row;
      }

      echo "<script>location.href='index.php'</script>";
  }
  else
  {
    echo "<script>alert('Invalid Credentials.')</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 15:12:56 GMT -->
<head>
    <title>Sign In</title>
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
            <form method="POST" action="">
                <img src="images/logo.png" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" class="validate" name="email" required>
                        <label for="email">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" required name="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button name="submit" class="waves-effect waves-light btn-large btn-log-in">Login</button>
                    </div>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
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