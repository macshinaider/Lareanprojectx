<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Formulário</h1>
	<form class="meu-formulario" method="post" action="enviar.php">
		<label for="texto">Digite um texto:</label>
		<input type="text" id="texto" name="texto" class="meu-input" required>
		<label for="imagem">Insira uma URL de imagem:</label>
		<input type="text" id="imagem" name="imagem" class="meu-input" required>
		<label for="numero">Digite um número:</label>
		<input type="number" id="numero" name="numero" class="meu-input" required>
		<input type="submit" value="Enviar" class="meu-botao">
	</form>
</body>
</html>