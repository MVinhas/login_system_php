<?php

$mysqli = new mysqli('localhost', 'user', 'password', 'db');

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}