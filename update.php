<?php

include "conn.php";
$id = $_GET['id'];
//
$stmt = $conn->prepare("select * from product where id = :id");
//
$stmt->bindParam(":id", $id);
//
$stmt->execute();

//
$producItem = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="updateAction.php" method="post">
		<input type="hydden" name="id" value="<?= $producItem['id']; ?>" readonly>
		<div>
			<input type="text" name="name" value="<?= $producItem['name']; ?>">
		</div >
		<div>
			<textarea name="description" id="" cols="30" rows="10">
			<?= $producItem['description']; ?>"
			</textarea>
		</div>
		<div>
			<input type="text" name="price" value="<?= $producItem['price']; ?>">
		</div>
		<div>
			<input type="submit" value="Atualizar">
		</div>


	</form>
</body>
</html>