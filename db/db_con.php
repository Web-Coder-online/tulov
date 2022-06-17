<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'tulov';

$dsn = "mysql:host=$host;dbname=$dbName";

$pdo = new Pdo($dsn, $user, $password);
