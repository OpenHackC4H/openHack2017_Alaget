<?php
include_once 'psl-config.php';

// Create connection
$con = new mysqli(HOST, USER, PASSWORD, DATABASE);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>