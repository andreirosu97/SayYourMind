<!DOCTYPE html>
<?php  include('api/configurePage.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./style-css/Feedback_Like_Positive_Message.png" sizes="18x18">

    <title>Support</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/support.css" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
    <p class="sr-only">navbar navbar-expand-md d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white  fixed-top</p>
  </head>

<body class="bg-light">

   <nav class="navbar navbar-expand bg-white">
    <img class="d-block" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="60" height="60">  
    <h5 class="my-0 mr-md-auto font-weight-bold p-2 text-dark">SayYourMind</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?php echo $homeLink ?>">Home</a>
        <a class="p-2 text-dark" href="<?php echo $featuresLink ?>">Features</a>
        <a class="p-2 text-dark" href="<?php echo $pricingLink ?>">Pricing</a>
        <a class="p-2 " href="<?php echo $supportLink ?>">Support</a>
      </nav>
      <a id="logBtn" class="btn btn-outline-primary" href="<?php echo $buttonHRef; ?>"><?php echo $buttonName; ?></a>
   </nav>  
  </header>

<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="90" height="90">
    <h2>Support form</h2>
    <p class="lead">For any questions you might have please complete the following form: </p>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-1 mx-auto">
      <form class="needs-validation was-validated" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username <span class="text-muted">(Optional)</span> </label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required="">
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 mb-3">
            <label for="question">Type of question</label>
            <select class="custom-select d-block" style="width: 100%" id="quesiton" required="">
              <option value="">Choose one of the following question type ...</option>
              <option>Information request</option>
              <option>Positions open for hiring</option>
              <option>Suggestions for new features</option>
              <option>Complaint</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>          
        </div>

      <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Please introduce your question below</label>
            <textarea class="form-control" rows="3" id="question" placeholder="" value="" required="" style="height:70px; max-height:200px;" ></textarea>
            <div class="invalid-feedback">
              Question field is empty.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>
    </div>
  </div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-black">© 2018-2019 Andrei & Raul</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="index.php">Home</a></li>
      <li class="list-inline-item"><a href="features.php">Features</a></li>
      <li class="list-inline-item"><a href="pricing.php">Pricing</a></li>
    </ul>
</footer>
</div>
Z
  
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