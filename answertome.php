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
    <input type="text" id="reqIdFromHTML" class="sr-only" value="<?php echo $reqNumber ?>" >
  </head>

  <body class="text-center">
    <form class="form-signin needs-validation" novalidate="">
    <img class="mb-4" src="./style-css/Feedback_Like_Positive_Message.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please responde to this question by <?php echo $author ?></h1>
      <hr class="mb-3">
      <h4 class="h4 mb-3 font-weight-normal"><?php echo $question ?></h4>

        <hr class="mb-4">   
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="rating">Give me a rating from 1 to 10 </label>
            <select class="custom-select d-block" id="rating" required="">
              <option value="">Choose one ...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div> 
          <div class="col-md-6 mb-3">
            <label for="gender">Please tell me your gender</label>
            <select class="custom-select d-block" id="sex" required="">
              <option value="">Choose one ...</option>
              <option value="male">Male</option>
              <option value = "female">Female</option>
              <option value = "other">Other</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>           
        </div>
        <hr class="mb-4">
        <div class="row">
         <div class="col-md-6 mb-3">
            <label for="age">Please tell me your are range</label>
            <select class="custom-select d-block" id="age" required="">
              <option value="">Choose one ...</option>
              <option value = "0 - 17"> 0 - 17</option>
              <option value = "18 - 29"> 18 - 29</option>
              <option value = "30 - 49"> 30 - 49</option>
              <option value = "50+"> 50+</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div> 
          <div class="col-md-6 mb-3">
            <label for="age">Please tell me your working domanin</label>
            <select class="custom-select d-block" id="work" required="">
              <option value="">Choose one ...</option>
              <option value = "IT">IT</option>
              <option value = "Management and Marketing"> Management and Marketing</option>
              <option value = "Teaching"> Teaching</option>
              <option value = "Industrial"> Industrial</option>
              <option value = "Other"> Other</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>           
        </div>
        <hr class="mb-4">
      <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Please leave a comment bellow</label>
            <textarea class="form-control" rows="3" id="text" placeholder="" value="" required="" style="height:70px; max-height:200px;" ></textarea>
            <div class="invalid-feedback">
              Comment field is empty.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" id="respBtn">Submit</button>
        <p class="mt-5 mb-3 text-muted">© Andrei Rosu & Steleac Raul</p>
      </form>

<!-- JAVA SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap-notify.js"></script>
<script src="./js/bootstrap-notify.min.js"></script>
<script src="./js/login.js"></script>
<script src="./js/request.js"></script>
<script src="./js/respond.js"></script>
<!-- END OF JAVA SCRIPTS -->

</body></html>