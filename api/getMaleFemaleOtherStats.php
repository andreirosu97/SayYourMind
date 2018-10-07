<?php
    include('user.php');
    session_start();

    $data = array();
    $reqNumber = $_POST['reqid'];

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT sex, AVG(rating) AS avg FROM ".TBL_RES." WHERE reqid=?  GROUP BY sex");
    $res = $stmt->execute(array($reqNumber));
    $vec = $stmt->fetchall();


    for ($i=0; $i<count($vec); $i++) 
        $data[$vec[$i]['sex']]=$vec[$i]['avg'];

    echo json_encode($data,JSON_PRETTY_PRINT);
?>