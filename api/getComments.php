<?php
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);

    $stmt = $pdo->prepare("SELECT text FROM ".TBL_RES." WHERE reqid=? ");
    $stmt->execute(array($reqNumber));
    $vec = $stmt->fetchall();
    $img = array();
    $img[0] = "images/mov.svg";
    $img[1] = "images/blue.svg";
    $img[2] = "images/roz.svg";

    for($i=0; $i < count($vec); $i++)
        echo "<div class=\"media text-muted pt-3\">
            <img data-src=\"holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1\" alt=\"32x32\" class=\"mr-2 rounded\" style=\"width: 32px; height: 32px;\" src=\" ".$img[$i%3]." \" data-holder-rendered=\"true\">
            <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
                <strong class=\"d-block text-gray-dark\">@anonym</strong>".
                $vec[$i]['text']."</p>
            </div>"
?>