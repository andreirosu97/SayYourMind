<?php
    include('config.php');

    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare("SELECT COUNT(*) AS NR FROM ".TBL_REQ." WHERE uid = '".$_SESSION["user"]["name"]."'");
    $stmt->execute();
    $nr = $stmt->fetch(PDO::FETCH_ASSOC);
    $reqCount = $nr["NR"];
    if($nr < 1)
        $reqCount = 0;
        
    if(5 - $reqCount > 3)
        $color = 'black';
    if (5 - $reqCount == 3)
        $color = 'green';
    else if(5 - $reqCount == 2)
        $color = 'orange';
    else
        $color = 'red;'
?>