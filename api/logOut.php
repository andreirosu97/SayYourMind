<?php
    session_start();
    $data = array();

    $_SESSION["user"] =  null;
    $_SESSION["loggedin"] = false;

    $data["logOut"] = true;
    echo json_encode($data,JSON_PRETTY_PRINT);
?>