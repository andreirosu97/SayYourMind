<?php
    include("user.php");

    $reqId = substr($_POST["reqId"],3);

    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    
    $st = $pdo->prepare("DELETE FROM user_requests WHERE reqid='".$reqId."'");
    $r1 = $st->execute();
    $st = $pdo->prepare("DELETE FROM requests WHERE reqid='".$reqId."'");
    $r2 = $st->execute();

    if($r1 && $r2)
        $data["result"] =  true;
    $data["result"] = $reqId;
    echo json_encode($data,JSON_PRETTY_PRINT);
?>