<?php
$nome = $_POST['nome'];
$imagem = $_FILES['imagem'];
$celular = $_POST['celular'];

// Fazer o upload da imagem para o servidor
if (!empty($imagem)) {
	$nome_imagem = $imagem['name'];
	$caminho_imagem = 'imagens/' . $nome_imagem;
	move_uploaded_file($imagem['tmp_name'], $caminho_imagem);
}

// Enviar os dados para o webhook
$dados = array(
	'nome' => $nome,
	'imagem' => $caminho_imagem,
	'celular' => $celular
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://exemplo.com/webhook');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
curl_exec($ch);
curl_close($ch);

// Redirecionar o usuário para uma página de sucesso
header('Location: sucesso.html');
?>
