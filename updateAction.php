<?php  

include "conn.php";

$id = $_POST['id'];
$name = $_POST["name"];
$description = $_POST["description"];
$price = filter_input(INPUT_POST, "price");

//preparar
$stmt = $conn->prepare("update product set name = :name, description = :description, price = :price where id = :id");

//trocar
$stmt->bindParam(":id", $id);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":price", $price);


//executar
$stmt->execute();

header("Location: list.php");
