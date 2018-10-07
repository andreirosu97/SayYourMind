<?php
    include('user.php');
    session_start();

    $usr = $_SESSION["user"];
    $data = array();

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT  AVG(rating) AS avg FROM ".TBL_RES."WHERE uid=? ");
    $stmt->execute(array($usr));
    $vec = $stmt->fetch(PDO::FETCH_ASSOC);

    $data["result"]=$vec['avg'];

    echo json_encode($data,JSON_PRETTY_PRINT);
?>