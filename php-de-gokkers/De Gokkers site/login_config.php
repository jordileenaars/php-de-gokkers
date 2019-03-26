<?php
session_start();
require 'config.php';

if(isset($_POST['login'])){

    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $sql = "SELECT email, password FROM gokkerscontext WHERE email = :email password = :password";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':email', $email);

    $stmt->execute();

    $email = $stmt->fetch(PDO::FETCH_ASSOC);

    if($email == false){

        die('Incorrect email / password combination!');
    } else{

        $validPassword = password_verify($password, $email['password']);

        if($validPassword) {

            $_SESSION['email_id'] = $email['email'];
            $_SESSION['logged_in'] = time();

            header('location: Download.php');
        }
         else{
            die('Incorrect email / password combination!');
            header('location: Login.php');
        }
    }

}