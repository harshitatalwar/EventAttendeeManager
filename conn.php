<?php
$host = 'localhost';
$db = 'attendance_db';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $password);
    // echo "<h1 class='text-success text-center'>Connected to Database !!</h1>";
} catch (PDOException $e) {
    // echo "<h1 class='text-danger text-center'>No Database Found ";
    throw new PDOException($e->getMessage);
}
require_once 'crud.php';
$crud = new crud($pdo);
