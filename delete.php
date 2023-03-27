<?php 

include "conn.php";

$id = $_GET['id'];

//
$stmt = $conn->prepare("delete from product where id = :id");

//
$stmt->bindParam(":id", $id);

//
$stmt->execute();

header("Location list.php");