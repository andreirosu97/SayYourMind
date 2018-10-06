<!DOCTYPE html>
<?php  include('loginLogoutBtn.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/pricing.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
    <p class="sr-only">navbar navbar-expand-md d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white  fixed-top</p>
  </head>

  <body>
    
    <nav class="navbar navbar-expand-md navbar-white d-flex flex-column flex-md-row fixed-top bg-white border-bottom shadow-sm p-3 align-items-center px-md-4 bg-white">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Home</a>
        <a class="p-2 text-dark" href="#">Featurures</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
        <a class="p-2 text-dark" href="#">Support</a>
      </nav>
      <a id="logBtn" class="btn btn-outline-primary" href="<?php echo $buttonHRef; ?>"><?php echo $buttonName; ?></a>
   </nav>  

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mt-4">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="./style-css/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">© 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Cool stuff</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Random feature</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Team feature</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Stuff for developers</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Another one</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Resource</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Resource name</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Another resource</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Team</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Locations</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Privacy</a></li>
              <li><a class="text-muted" href="http://getbootstrap.com/docs/4.1/examples/pricing/#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

  
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