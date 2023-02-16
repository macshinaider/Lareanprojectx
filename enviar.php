<?php
// URL do webhook
$webhook_url = "https://n8n.larean.com.br/webhook-test/94a0ead2-277d-4a50-afa2-258b0770d626";

// Dados do formulário
$descricao = $_POST["descricao"];
$imagem = $_FILES["imagem"];


// Preparando dados para enviar no webhook
$data = array(
	"descricao" => $descricao,
	"imagem" => base64_encode(file_get_contents($imagem["tmp_name"]))	
);

// Enviando dados via webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// Exibindo mensagem de sucesso ou erro
if ($result) {
	echo "Dados enviados com sucesso!";
} else {
	echo "Ocorreu um erro ao enviar os dados.";
}
?>