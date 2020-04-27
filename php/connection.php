<?php
$db_driver="mysql"; 
$host = "localhost"; 
$database = "organizationpcs";

$dsn = "$db_driver:host=$host; dbname=$database";
$username = "root"; $password = "";

$connection = new PDO ($dsn, $username, $password);
