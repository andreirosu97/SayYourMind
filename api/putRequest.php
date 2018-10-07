<?php
    include('user.php');
    session_start();

    $data = array();

    $uid = $_POST['uid'];
    $text = $_POST['text'];
    $date = date("Y/m/d");
    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT LAST_INSERT_ID(nr) AS NR FROM ".TBL_REQ." ORDER BY NR DESC");
    $stmt->execute();
    $nr = $stmt->fetch(PDO::FETCH_ASSOC);
    $reqid = $nr["NR"];
    $reqid = hash_hmac("sha512", $reqid, "pizza4life");

    $stmt = $pdo->prepare("INSERT INTO ".TBL_REQ." (uid, reqid, text, date ) VALUES (?,?,?,?)");
    $stmt->execute(array($uid, $reqid, $text, $date));

    $stmt = $pdo->prepare("SELECT * FROM ".TBL_REQ." WHERE uid=? ORDER BY nr DESC");
    $stmt->execute(array($uid));
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    $data["result"] = $res;
    //log request
    echo json_encode($data,JSON_PRETTY_PRINT);
?>