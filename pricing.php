<!DOCTYPE html>
<?php  include('api/configurePage.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png">

    <title>Pricing</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/pricing.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
    <p class="sr-only">navbar navbar-expand-md d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white  fixed-top</p>
  </head>

  <body>
    
    <nav class="navbar navbar-expand bg-white">
    <img class="d-block" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="60" height="60">  
    <h5 class="my-0 mr-md-auto font-weight-bold p-2 text-dark">SayYourMind</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a id="dashboardbtn" class="p-2 text-dark" href="dashboard.php" style="visibility: <?php echo $dashboardVis?>">Dashboard</a>  
        <a class="p-2 text-dark" href="<?php echo $homeLink ?>">Home</a>
        <a class="p-2 text-dark" href="<?php echo $featuresLink ?>">Features</a>
        <a class="p-2" href="<?php echo $pricingLink ?>">Pricing</a>
        <a class="p-2 text-dark" href="<?php echo $supportLink ?>">Support</a>
      </nav>
      <a id="logBtn" class="btn btn-outline-primary" href="<?php echo $buttonHRef; ?>"><?php echo $buttonName; ?></a>
   </nav>  

    <div class="container">

    <div class="pricing-header px-3 py-5 pt-md-5 pb-md-4 mx-auto text-center ">
      <h1 class="display-4">Pricing</h1>
      <p class="lead font-weight-bold">For more advantages you can choose one of the following options: </p>
    </div>

      <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm" >
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-group list-group-flushd ">
            <li class="list-group-item font-weight-bold">5 requests</li>
            <li class="list-group-item font-weight-bold">Ads</li>
            <li class="list-group-item font-weight-bold">Email support</li>
            <li class="list-group-item font-weight-bold">Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mt-3 "  onclick="location.href='signup.php'">Sign up for free</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">Paid user</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
            <ul class="list-group list-group-flushd ">
            <li class="list-group-item font-weight-bold">20 requests</li>
            <li class="list-group-item font-weight-bold">Ads Free</li>
            <li class="list-group-item font-weight-bold">Priority email support</li>
            <li class="list-group-item font-weight-bold">Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary mt-3" onclick="location.href='support.php'">Contact us</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-bold">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$45 <small class="text-muted">/ mo</small></h1>
            <ul class="list-group list-group-flushd ">
            <li class="list-group-item font-weight-bold">Unlimited requests</li>
            <li class="list-group-item font-weight-bold">Ads Free</li>
            <li class="list-group-item font-weight-bold">Phone and email support</li>
            <li class="list-group-item font-weight-bold">Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary mt-3" onclick="location.href='support.php'">Contact us</button>
          </div>
        </div>
      </div>
    </div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-white">© 2018-2019 Andrei & Raul</p>
    <ul class="list-inline">
       <li class="list-inline-item"><a href="index.php">Home</a></li>
      <li class="list-inline-item"><a href="features.php">Features</a></li>
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