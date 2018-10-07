<?php  session_start();

  $userName =' ';
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    $buttonName = "Log out";
    $buttonHRef = "";
    $dashboardVis = "visible";
    $userName = $_SESSION["user"]["name"];
  } else {
    $buttonName = "Sign in";
    $buttonHRef = "login.php";
    $dashboardVis = "hidden";
  }

  $currentPage = $_SERVER['REQUEST_URI'];
  $homeLink = "index.php";
  $pricingLink = "pricing.php";
  $featuresLink = "features.php";
  $supportLink = "support.php";

  switch($currentPage) {
    case "/index.php" : $homeLink = "?"; break;
    case "/pricing.php" : $pricingLink = "?"; break;
    case "/features.php" : $featuresLink = "?"; break;
    case "/support.php" : $supportLink = "?"; break;
    default: if(!$_SESSION["loggedin"]) {
      die("404 You can't acces this page without logging in.");
    }
  }
?>