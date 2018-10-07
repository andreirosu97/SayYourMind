<!DOCTYPE html>
<?php  include('api/configureDashPage.php');
    include('api/getRequestToShow.php');
    if($author == $userName) {
        $adminView = "";
        $userView = "style=\"display:none\"";
        $includedCSS = "dashboard.css";
    } else {
        $adminView = "style=\"display:none\"";
        $userView = "";
        $includedCSS = "answer.css";
    }
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Andrei Rosu">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="./style-css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./style-css/<?php echo $includedCSS?>" rel="stylesheet">
    <link href="./style-css/animate.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin needs-validation" novalidate="">
    <img class="mb-4" src="./style-css/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please responde to this question by <?php echo $author ?></h1>
      <h3 class="h3 mb-3 font-weight-normal"></h3>


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
        <p class="mt-5 mb-3 text-muted">© Andrei Rosu & Steleac Raul</p>
      </form>

<!-- JAVA SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap-notify.js"></script>
<script src="./js/bootstrap-notify.min.js"></script>
<script src="./js/login.js"></script>
<script src="./js/request.js"></script>
<!-- END OF JAVA SCRIPTS -->

</body></html>