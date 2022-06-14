<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'rafaelberlato');
define('SENHA', 'berlato_admin@1902');
define('DB', 'sistemas');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');