<?php

$usuario = 'root';
$senha = '';
$database = 'lojacarro';
$host = 'localhost';

$conect = new mysqli($host, $usuario, $senha, $database);

if($conect->error) {
    die("Falha ao conectar ao banco de dados: " . $conect->error);
}