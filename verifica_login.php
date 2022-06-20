<?php
if(!$_SESSION['nome']) {
	header('Location: tela-login.php');
	exit();
}

?>