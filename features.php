<!DOCTYPE html>
<?php  include('api/configurePage.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png">

    <title>Features</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/product.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
  </head>

<body class="text-center">

<nav class="navbar navbar-expand bg-white">
    <img class="d-block" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="60" height="60">  
    <h5 class="my-0 mr-md-auto font-weight-bold p-2 text-dark">SayYourMind</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a id="dashboardbtn" class="p-2 text-dark" href="dashboard.php" style="visibility: <?php echo $dashboardVis?>">Dashboard</a>
        <a class="p-2 text-dark" href="<?php echo $homeLink ?>">Home</a>
        <a class="p-2" href="<?php echo $featuresLink ?>">Features</a>
        <a class="p-2 text-dark" href="<?php echo $pricingLink ?>">Pricing</a>
        <a class="p-2 text-dark" href="<?php echo $supportLink ?>">Support</a>
      </nav>
      <a id="logBtn" class="btn btn-outline-primary" href="<?php echo $buttonHRef; ?>"><?php echo $buttonName; ?></a>
   </nav>  

<div class="container">
    <div class="card img-ovf mb-3" >
        <img class="img-fluid card-img" src="./images/dashboard_pic.jpg ">
        <div class="card-img-overlay d-flex">
            <div class="my-auto mx-auto text-center">
                <h4 class="card-title display-4 font-weight-bold text-dark ">Reports</h4>
                <p class="card-text lead font-weight-bold text-dark">We provide detail charts base on the feedback from your requests.</p>
            </div>
        </div>
    </div>

    <div class="card img-ovf  mb-3" >
        <img class="img-fluid card-img" src="./images/rate.jpg">
        <div class="card-img-overlay d-flex ">
            <div class="my-auto mx-auto text-center">
                <h4 class="card-title display-4 font-weight-bold text-black ">Give ratings</h4>
                <p class="card-text lead font-weight-bold text-black">A quick and easy way to respond</p>
            </div>
        </div>
    </div>
    
    <div class="card img-ovf" >
        <img class="img-fluid card-img" src="./images/feedback.jpg ">
        <div class="card-img-overlay d-flex">
            <div class="my-auto mx-auto text-center">
                <h4 class="card-title display-4 font-weight-bold text-dark ">Create your own feedback request</h4>
            </div>
        </div>
    </div>


</div>    
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-white">© 2018-2019 Andrei & Raul</p>
    <ul class="list-inline">
       <li class="list-inline-item"><a href="index.php">Home</a></li>
      <li class="list-inline-item"><a href="pricing.php">Pricing</a></li>
      <li class="list-inline-item"><a href="support.php">Support</a></li>
    </ul>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
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