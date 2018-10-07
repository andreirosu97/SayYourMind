<?php
    include('user.php');
    session_start();

    $usr = $_SESSION["user"];
    $data = array();

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT AVG(rating) AS avg FROM ".TBL_RES." t,".TBL_REQ." r WHERE uid=? AND r.reqid = t.reqid ");
    $stmt->execute(array($usr["name"]));
    $vec = $stmt->fetch(PDO::FETCH_ASSOC);

    $data["avg"]=$vec['avg'];

    echo json_encode($data,JSON_PRETTY_PRINT);
?>