<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
// senha do meu localhost, padrão deixar null
$databasePassword = 'teste123';

// Conexão com banco de dados
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
