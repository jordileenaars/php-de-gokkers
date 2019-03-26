<?php
$dbHost = "LocalHost";
$dbUser = "root";
$dbPass = "";
$dbName = "degokkers";

$db = new PDO(
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPass
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );