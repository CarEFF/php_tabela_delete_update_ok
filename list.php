<?php  

include "conn.php";

//preparar
$stmt = $conn->prepare("select * from product");

//executar
$stmt->execute();

//listar
$list = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="pr-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Preço</th>
			<th>Ações</th>
		</tr>
		<?php foreach ($list as $row): {
			# code...
		} ?>
		<tr>
		<!--aui chame o id, name....do banco--->	
			<td><?= $row['id'];?></td>
			<td><?= $row['name'];?></td>
			<td><?= $row['description'];?></td>
			<td><?= $row['price'];?></td>
			<td>
				<a href="update.php?id=<?= $row['id'];?>">Editar</a>
				|
				<a href="delete.php?id=<?= $row['id'];?>">Excluir</a>
			</td>


		</tr>
		<?php endforeach; ?>
	</table>
	
</body>
</html>