<?php
    include('user.php');
    session_start();

    $data = array();

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT sex, AVG(rating) AS avg FROM ".TBL_RES." GROUP BY sex");
    $stmt->execute();
    $vec = $stmt->fetch_all(PDO::FETCH_ASSOC);

    for ($i=0; $i<3; $i++) 
        $data[$vec[$i]['sex']]=$vec[$i]['avg'];

    echo json_encode($data,JSON_PRETTY_PRINT);
?>