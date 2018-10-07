<!DOCTYPE html>
<?php session_start();?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Andrei Rosu">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png">

    <title>Sign up</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/signup.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signup">
      <img class="mb-4" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Sign up here</h1>

        <div id="alertUser" class="alert alert-warning fade show" style="margin-top: 10px;">  
          <a class="close">×</a>  
          <strong>Warning!</strong> The user you selected is already taken, try again.
        </div>

      <label for="inputUsername " class="sr-only">Username</label>
      <input type="text" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="" autocomplete="off">

      <div id="alertPassword" class="alert alert-danger fade show" style="margin-top: 10px;">  
          <a class="close">×</a>  
          <strong>Warning!</strong> Make sure the two passwords match and try again.
      </div>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

      <label for="inputPasswordRepeat" class="sr-only">Repeat password</label>
      <input type="password" id="inputPasswordRepeat" class="form-control" placeholder="Repeat password" required="">

      <button class="btn btn-lg btn-primary btn-block" id="sign-up-button">Sign up</button>
      <p class="mt-5 mb-3 text-muted">© Andrei Rosu & Steleac Raul</p>

    </form>

<!-- JAVA SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap-notify.js"></script>
<script src="./js/bootstrap-notify.min.js"></script>
<script src="./js/getSession.js"></script>
<script src="./js/alerts.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/signup.js"></script>
<!-- END OF JAVA SCRIPTS -->

</body></html>