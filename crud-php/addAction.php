<html>
<head>
	<title>Adicionar usuario</title>
</head>

<body>
<?php
// Incluir conexão com o banco
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escapando caracteres especiais(torna a string mais segura para a consulta)
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Checar campos vazios
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
		
		// Pagina anterior
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// Se todos os campos forem preenchidos

		// Inserir dados na tabelaa
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		// Mensagem de sucesso
		echo "<p><font color='green'>Cadastro efetuado com sucesso</p>";
		echo "<a href='index.php'>Ver resultado</a>";
	}
}
?>
</body>
</html>
