<?php
// Incluir conexão com o banco
require_once("dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Home</title>
</head>

<body>
	<h2>Cadastro usuarios</h2>
	<p>
		<a href="add.php">Adicionar usuario</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nome</strong></td>
			<td><strong>Idade</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Ação</strong></td>
		</tr>

		<a href=""></a>
		<?php
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Certeza que quer deletar?')\">Deletar</a></td>";
		}
		?>
	</table>
</body>
</html>
