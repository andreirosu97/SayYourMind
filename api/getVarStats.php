<?php
    include('user.php');
    session_start();

    $reqNumber = $_POST['reqid'];
    $data = array();

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT age, AVG(rating) AS avg FROM ".TBL_RES." WHERE reqid=?  GROUP BY age");
    $stmt->execute(array($reqNumber));
    $vec = $stmt->fetchall();

    for ($i=0; $i<count($vec); $i++) 
        $data[$vec[$i]['age']]=$vec[$i]['avg'];
        
    echo json_encode($data,JSON_PRETTY_PRINT);
?>