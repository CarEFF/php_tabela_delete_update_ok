<?php 

$host = "localhost";
$db = "shop";
$users = "root";
$pass = "";

try {
	$conn = new PDO("mysql:host={$host}; dbname={$db}", $users, $pass);
} catch (PDOException $e) {
	echo "erro". $e;
}