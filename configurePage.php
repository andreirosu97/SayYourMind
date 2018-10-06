<?php  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    $buttonName = "Log out";
    $buttonHRef = "";
  } else {
    $buttonName = "Sign in";
    $buttonHRef = "login.php";
  }

  $currentPage = $_SERVER['REQUEST_URI'];

  switch($currentPage) {
    case "index.php" : $homeLink = "?"; break;
    case "pricing.php" : $pricingLink = "?"; break;
    case "features.php" : $featuresLink = "?"; break;
    case "support.php" : break;
  }
  

?>