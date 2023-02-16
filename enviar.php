<?php
// Dados do formulário
$texto = $_POST['texto'];
$imagem = $_POST['imagem'];

// Dados para o webhook
$data = array('texto' => $texto, 'imagem' => $imagem);
$options = array(
	'http' => array(
		'header' => "Content-type: application/x-www-form-urlencoded\r\n",
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);
$context = stream_context_create($options);
$result = file_get_contents('https://n8n.larean.com.br/webhook-test/ce1d1dcd-28c3-4c62-b09f-f6bc7442c17b', false, $context);

// Mensagem de sucesso ou erro
if ($result === false) {
	echo "Ocorreu um erro ao enviar os dados.";
} else {
	echo "Dados enviados com sucesso!";
}
?>