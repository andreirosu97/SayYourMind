<!DOCTYPE html>
<?php  include('api/configureDashPage.php');
include('api/countReqNoApi.php');
?>
<!-- saved from url=(0053)http://getbootstrap.com/docs/4.1/examples/dashboard/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/dashboard.css" rel="stylesheet">
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
      <div class="row">
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
                <a class="nav-link active" href="<?php echo $requestLink ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  New request <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $activereqLink ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Active requests
                </a>
              </li>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create a new feedback request here</h1>
          </div>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Feedback request form</h2>
        <h3>Be aware that you can have only 5 requests active at a time!</h3>
        <h3>Number of requests left : </h3><h3 style="color:<?php echo $color?>;"><?php echo 5 - $reqCount; ?></h3>
        <p class="lead">Please fill the form below to recieve the request link to give out to people.</p>
      </div>
        <div class="col-md-12 order-md-1 " >
          <h4 class="mb-3">Question</h4>
          <form class="needs-validation " novalidate="">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="firstName">Question or statement on which you want the feedback</label>
                <textarea class="form-control" rows="3" id="question" placeholder="" value="" required="" style="height:70px; max-height:200px;" ></textarea>
                <div class="invalid-feedback">
                  Question field is empty.
                </div>
              </div>
            </div>
            <h4 class="mb-3">Request link</h4>
            <input id="linkOut" class="form-control" type="text" placeholder="The link will appeare here ..." readonly>
            <button id="copyBtn" type="button" class="btn btn-secondary mt-1 float-right" onclick="makeCopy()" >Copy to clipboard</button>

            <hr class="mb-4 mt-5" >
            <button id="reqBtn" class="btn btn-primary btn-lg btn-block" <?php if(5 - $reqCount == 0) echo 'disabled'?>> Submit request</button>
          </form>
        </div>
      </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
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
    <script src="./js/copytoclip.js"></script>

    <!-- Icons -->
    <script src="./style-css/feather.min.js.download"></script>
    <script>
      feather.replace()
    </script>
    
    <script src="./js/request.js"></script>

</body></html>