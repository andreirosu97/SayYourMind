<?php
    session_start();

    $data = array();

    $data["user"] = $_SESSION["user"];
    $data["loggedin"] = $_SESSION["loggedin"];
    $data["lastReqId"] = $_SESSION["lastReqId"];

    echo json_encode($data,JSON_PRETTY_PRINT);
?>