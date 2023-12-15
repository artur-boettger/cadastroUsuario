<?php
// Incluir conexão com o banco
require_once("dbConnection.php");

// Pegar id do parametro
$id = $_GET['id'];

// Deletar row da tabela
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

// Redirecionar para home
header("Location:index.php");
