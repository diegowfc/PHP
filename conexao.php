<?php
$dsn = 'mysql:dbname=chat;host=127.0.0.1';
$usuarioBanco = 'root';
$senhaBanco = '';

$objetoConexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
