<?php
// session_start();
echo "<pre>";
echo "hello";
session_start();
print_r($_SESSION['user']);die;
if(!isset($_SESSION['user']))
{
  print_r($_SESSION['user']);die;
  // header("location:login.php");
}