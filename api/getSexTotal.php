<?php
    include('user.php');
    session_start();

    $data = array();
    $usr = $_SESSION["user"];

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT sex, COUNT(rating) AS cnt FROM ".TBL_RES." WHERE uid=?  GROUP BY sex ");
    $stmt->execute(array($usr));
    $vec = $stmt->fetchall();

    for ($i=0; $i<count($vec); $i++) 
        $data[$vec[$i]['sex']]=$vec[$i]['cnt'];

    echo json_encode($data,JSON_PRETTY_PRINT);
?>