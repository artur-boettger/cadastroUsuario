<?php
// Incluir conexão com o banco
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escapando caracteres especiais(torna a string mais segura para a consulta)
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// Checando campos vazios
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Nome está vazio.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Idade está vazio.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email está vazio.</font><br/>";
		}
	} else {
		// Update da tabela
		$result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `age` = '$age', `email` = '$email' WHERE `id` = $id");
		
		// Mensagem de sucesso
		echo "<p><font color='green'>Dados atualizados com sucesso</p>";
		echo "<a href='index.php'>Ver resultado</a>";
	}
}
