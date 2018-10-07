<?php  session_start();

  $userName = '';
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    $buttonName = "Log out";
    $buttonHRef = "";
    $userName = $_SESSION["user"]["name"];
  } else {
    $buttonName = "Sign in";
    $buttonHRef = "login.php";
  }

  $currentPage = $_SERVER['REQUEST_URI'];
  $dashboardLink = "dashboard.php";
  $requestLink =  "request.php";
  $activereqLink = "activereq.php";
  $reportsLink = "reports.php";

  $currentPage = substr(strrchr($currentPage, "/"), 1);

  if(isset($_SESSION["loggedin"]) && !$_SESSION["loggedin"]) {
    die("404 You can't acces this page without logging in.");
  }

  switch($currentPage) {
    case "dashboard.php" : $dashboardLink = "?"; break;
    case "request.php" : $requestLink = "?"; break;
    case "activereq.php" : $activereqLink = "?"; break;
    case "reports.php" : $reportsLink = "?"; break;
  }
?>