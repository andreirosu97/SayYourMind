<?php  session_start();
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    $buttonName = "Log out";
    $buttonHRef = "";
  } else {
    $buttonName = "Sign in";
    $buttonHRef = "login.php";
  }
?>