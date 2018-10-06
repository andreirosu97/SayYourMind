<?php
    include('user.php');
    session_start();

    $data = array();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $user = new User($pdo,$username,$password);
    $res = $user->login();
    if($res) {
        $data["username"] = $user->getUsername();
        $data["goodpass"] = true;
        
        $_SESSION["loggedin"] = true;
        $_SESSION["user"] = $res;
    } else if ($user->findUser()) {
        $data["username"] = $user->getUsername();
        $data["goodpass"] = false;
    } else {
        $data["username"] = null;
        $data["goodpass"] = false;
    }

    echo json_encode($data,JSON_PRETTY_PRINT);
?>