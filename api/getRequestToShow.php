<?php 
    include("config.php");
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $author = "";
    $reqNumber = "";
    $question = "";
    $author = $_GET['user'];
    $reqNumber = $_GET['req'];
    
    $stmt = $pdo->prepare("SELECT text FROM ".TBL_REQ." WHERE reqid=?");
    $stmt->execute(array($reqNumber));
    $val = $stmt->fetch(PDO::FETCH_ASSOC);
    $question = $val['text'];
?>