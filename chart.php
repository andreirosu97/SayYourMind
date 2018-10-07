<!DOCTYPE html>
<?php  include('api/configureDashPage.php');
    include('api/getRequestToShow.php');
?>
<!-- saved from url=(0053)http://getbootstrap.com/docs/4.1/examples/dashboard/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/dashboard.css" rel="stylesheet"> <input type="text" id="reqIdFromHTML" class="sr-only" value="<?php echo $reqNumber ?>" >
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">SayYourMind</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a id="logBtn" class="nav-link" href="<?php echo $buttonHRef; ?>"><?php echo $buttonName; ?></a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row" >
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $dashboardLink ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $requestLink ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  New request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $activereqLink ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Active requests <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-bottom:60px">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Charts and statistics for your feedback request</h1>
          </div>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Feedback requests</h2>
        <p class="lead">From here you can manage your requests</p>
      </div>

    <div class="row">
      <div class="col-md-12 mb-3 border">
        <canvas class="my-4 w-100 chartjs-render-monitor" id="domChart" width="1136" height="479" style="display: block; height: 436px; width: 1033px;"></canvas>
      </div>
    </div>
     <div class="row">
      <div class="col-md-5 mb-3 mr-5 ml-5 border">
        <canvas class="my-4 w-100 chartjs-render-monitor " id="sexChart" width="500" height="600" style="display: block; height: 410px; width: 511px;"></canvas>
       </div> 
      <div class="col-md-5 mb-3 mr-5 ml-4 border">
        <canvas class="my-4 w-100 chartjs-render-monitor" id="varChart" width="500" height="600" style="display: block; height: 360px; width: 511px;"></canvas>
      </div>
    </div>
      <footer class="mb-0 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2018-2019 Andrei & Raul</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="support.php">Support</a></li>
        </ul>
      </footer>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./style-css/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./style-css/popper.min.js.download"></script>
    <script src="./style-css/bootstrap.min.js.download"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/bootstrap-notify.js"></script>
    <script src="./js/bootstrap-notify.min.js"></script>
    <script src="./js/getSession.js"></script>
    <script src="./js/logOut.js"></script>

    <!-- Icons -->
    <script src="./style-css/feather.min.js.download"></script>

    <script>
      feather.replace()
    </script>
    <script src="./style-css/Chart.min.js.download"></script>
    <script src="./js/sexChart.js"></script>
    <script src="./js/varChart.js"></script>
    <script src="./js/domChart.js"></script>

</body></html>