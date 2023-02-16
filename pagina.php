<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$senha = $_POST["senha"];

	if ($senha == "Lucas102030@") {
		$_SESSION["autenticado"] = true;
		header("Location: pagina.php");
		exit;
	} else {
		$erro = "Senha incorreta.";
	}
}
?>
