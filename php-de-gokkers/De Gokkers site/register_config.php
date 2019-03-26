<?php
if ( $_SERVER['REQUEST_METHOD'] != 'POST' ){
    header('location: login.php');
}

require "config.php";

if ($_POST['type'] == 'create') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO gokkerscontext ( username, password, email ) 
          VALUES ( :username, :password, :email )";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':username' => $username,
        ':password' => $password,
        ':email' => $email
    ]);
    header('Location: login.php');
    exit;
}