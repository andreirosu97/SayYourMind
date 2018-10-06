<?php
    include('user.php');
    session_start();

    $data = array();

    $uid = $_POST['uid'];
    $text = $_POST['text'];
    $date = date("Y/m/d");
    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("INSERT INTO ".TBL_REQ." (uid, text, date ) VALUES (?,?,?)");
    $stmt->execute(array($uid, $text, $date));
    $stmt = $pdo->prepare("SELECT * FROM ".TBL_REQ." WHERE uid=? ORDER BY reqid DESC");
    $stmt->execute(array($uid));
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    $data["result"] = $res;

    echo json_encode($data,JSON_PRETTY_PRINT);
?>