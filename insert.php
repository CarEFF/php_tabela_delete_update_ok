<?php  

include "conn.php";

$name = $_POST["name"];
$description = $_POST["description"];
$price = filter_input(INPUT_POST, "price");

//echo "$name = $description = $price";

//preparar
$stmt = $conn->prepare("insert into product (name, description, price) values (:name, :description, :price)"); 

//trocar
$stmt->bindParam(":name", $name);

$stmt->bindParam(":description", $description);

$stmt->bindParam(":price", $price);
//executar
$stmt->execute();

header("Location: index.php");
?>