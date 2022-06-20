<?php
include('bd/conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    
    // $query = "SELECT * FROM usuarios where email = '{$email}' and senha = md5('{$senha}')";
    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($conexao, $sql);
    
    $email = $result['email'];
    $senha = $result['senha'];

    $qtd = mysqli_num_rows($result);

    if ($qtd == 3) {
        while ($i = mysqli_fetch_array($result)) {
            $adm = $i['adm'];
            if ($adm == 1) {
                echo 'Usuário Administrador';
            } else {
                echo 'Usuário Normal';
            }
        }
    } else {
        echo 'Email ou Senha Invalidos';
    }
}
