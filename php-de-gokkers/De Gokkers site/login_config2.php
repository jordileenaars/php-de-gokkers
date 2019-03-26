<?php
session_start();
require 'config.php';


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM gokkerscontext WHERE (email=:email)";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' => $email
]);

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

if ($result){
    $hashed_password = $result[0]['password'];

    if (password_verify($password, $hashed_password) )(
        $_SESSION['email'] = $email;
        header('location Download.php');
        exit();
    )
}

header('location login.php');