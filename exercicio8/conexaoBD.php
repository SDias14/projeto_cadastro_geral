<?php

// variáveis para conexão com banco de dados online
$host = 'localhost';
$user = 'root';
$password = 'root';
$Database = 'login';

// estabelecer conexão com o mysql
$conexao= new mysqli($host, $user, $password);

// verificar se houve erro na conexão
if ($conexao->connect_error) {
   // se houve erro, mostra erro na tela
   die("<p><b>Erro!</b> Falha na conexão:<br>$conexao->connect_error</p>");
}
// alterar o tipo de codificação da conexão com o banco de dados,  para utf8
if (!$conexao->set_charset('utf8')) {
   die("<p>O charset não é utf8: $conexao->error</p>");
}

// se não abrir o banco de dados para trabalhar
if (!$conexao->select_db($Database)) {
   die("<p class='error'><b>Erro!</b> Não foi possível abrir o banco de dados: <b>$Database</b><br>$conexao>error</p>");
}