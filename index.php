<?php

session_start(); 
if (!isset($_SESSION['visited'])) {
    
    header("Location: start.php");
    exit(); 
}