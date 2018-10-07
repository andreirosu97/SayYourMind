<?php
    include('config.php');
    $data = array();

    $reqid = $_POST['reqid'];
    $rating = $_POST['rating'];
    $text = $_POST['text'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $work = $_POST['work'];

    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    
    $stmt = $pdo->prepare("INSERT INTO ".TBL_RES." (reqid, rating, text, sex, age, work) VALUES (?,?,?,?,?,?)");
    $r = $stmt->execute(array($reqid, $rating, $text, $sex, $age, $work));

    $data["result"] = $r;    
    echo json_encode($data,JSON_PRETTY_PRINT);
?>