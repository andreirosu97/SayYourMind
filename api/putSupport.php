<?php
    $data = array();

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $QuestionType = $_POST['QuestionType'];
    $Question = $_POST['Question'];

    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    
    $stmt = $pdo->prepare("INSERT INTO ".TBL_SUPP." (FirstName, LastName, UserName, Email, QuestionType, Question) VALUES (?,?,?,?,?,?)");
    $r = $stmt->execute(array($FirstName, $LastName, $UserName, $Email, $QuestionType, $Question));

    $data["result"] = $r;    
    echo json_encode($data,JSON_PRETTY_PRINT);
?>