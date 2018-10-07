<!DOCTYPE html>
<?php session_start();
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Andrei Rosu">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/signin.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
  </head>

  <body class="text-center">
      
 
    <form class="form-signin ">
      <img class="mb-4" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputUsername " class="sr-only">Username</label>
      <input type="text" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block" id="sign-in-button">Sign in</button>
      <div class="row justify-content-center">
        <div class="col-md-4"> 
      <button type="button" class="btn btn-secondary btn-sm mt-1" onclick="location.href='signup.php'">Sign up now !</button></div>
      <div class="col-md-4"><button type="button" class="btn btn-secondary btn-sm mt-1" onclick="window.history.back();">Go back</button></div>
      <p class="mt-5 mb-3 text-muted">© Andrei Rosu & Steleac Raul</p>

    </form>

<!-- JAVA SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap-notify.js"></script>
<script src="./js/bootstrap-notify.min.js"></script>
<script src="./js/login.js"></script>
<!-- END OF JAVA SCRIPTS -->

</body></html>