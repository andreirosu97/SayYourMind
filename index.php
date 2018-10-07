<!DOCTYPE html>
<?php  include('api/configurePage.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png">

    <title>SayYourMind</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/home.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
    <p class="sr-only">navbar navbar-expand-md d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white  fixed-top</p>
  </head>


<body class="text-center">

<nav class="navbar navbar-expand fixed-top bg-white">
    <img class="d-block" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="60" height="60">  
    <h5 class="my-0 mr-md-auto font-weight-bold p-2 text-dark">SayYourMind</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a id="dashboardbtn" class="p-2 text-dark" href="dashboard.php" style="visibility: <?php echo $dashboardVis?>">Dashboard</a>
        <a class="p-2" href="<?php echo $homeLink ?>">Home</a>
        <a class="p-2 text-dark" href="<?php echo $featuresLink ?>">Features</a>
        <a class="p-2 text-dark" href="<?php echo $pricingLink ?>">Pricing</a>
        <a class="p-2 text-dark" href="<?php echo $supportLink ?>">Support</a>
        <a id="logBtn" class="btn btn-outline-primary" href="<?php echo $buttonHRef; ?>"><?php echo $buttonName; ?></a>
      </nav>
   </nav> 

   
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto pt-5 flex-column">
  <main role="main" class="inner cover my-auto">
        <h1 class="cover-heading">Wellcome to SayYourMind</h1>
        <p class="lead">Your opinon metters. Give and receive feedback on diffrent matters quick and easy.</p>
        <p class="lead">
        <a href="<?php echo $featuresLink ?>" class="btn btn-lg btn-secondary" style="color:black;">Learn more</a>
        </p>
    </main>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-white">© 2018-2019 Andrei & Raul</p>
    <ul class="list-inline">
       <li class="list-inline-item"><a href="features.php">Features</a></li>
      <li class="list-inline-item"><a href="pricing.php">Pricing</a></li>
      <li class="list-inline-item"><a href="support.php">Support</a></li>
    </ul>
</footer>

</div>

  
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster-->
    <script src="./style-css/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./style-css/popper.min.js.download"></script>
    <script src="./style-css/bootstrap.min.js.download"></script>
    <script src="./style-css/holder.min.js.download"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/bootstrap-notify.js"></script>
    <script src="./js/bootstrap-notify.min.js"></script>
    <script src="./js/getSession.js"></script>
    <script src="./js/logOut.js"></script>
</body></html>