<?php

$databaseHost = 'localhost';
$databaseName = 'diary';
$databaseUsername = 'root';
$databasePassword = '';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("cannot connect");
