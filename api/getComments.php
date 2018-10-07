<?php
    include('user.php');
    session_start();

    $data = array();
    $reqNumber = $_POST['reqid'];

    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT text  FROM ".TBL_RES."WHERE reqid=? ");
    $stmt->execute(array($reqNumber));
    $vec = $stmt->fetch_all(PDO::FETCH_ASSOC);

    $data["resul"] = $vec;

    echo json_encode($data,JSON_PRETTY_PRINT);
?>