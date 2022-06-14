<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'rafaelberlato');
define('SENHA', 'berlato_admin@1902');
define('DB', 'sistemas');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

// try {
//     $pdo = new PDO("mysql:dbname=sistemas;host=127.0.0.1", "rafaelberlato", "berlato_admin@1902");
// } catch (PDOException $e) {
//     echo "ERRO: " . $e->getMessage();
//     exit;
// }

// if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
//     $nome =  $_POST['nome'];
//     $mensagem = $_POST['mensagem'];

//     $sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
//     $sql->bindValue(":nome", $nome);
//     $sql->bindValue(":msg", $mensagem);
//     $sql->execute();
// }