<?php  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    $buttonName = "Log out";
    $buttonHRef = "";
    $dashboardVis = "visible";
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
  }
?>