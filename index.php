<?php

session_start(); 
if (!isset($_SESSION['visited'])) {
    
    header("Location: start.php");
    exit(); 
}

$jsonData = file_get_contents('packages.json');


if ($jsonData === false) {
    die("Gagal membaca file JSON.");
}


$packages = json_decode($jsonData, true);


if ($packages === null) {
    die("Gagal mendecode data JSON.");
}
