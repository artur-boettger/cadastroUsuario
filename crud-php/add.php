<html>
<head>
	<title>Adicionar usuario</title>
</head>

<body>
	<h2>Adicionar usuario</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Adicionar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

