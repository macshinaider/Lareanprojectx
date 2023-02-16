<!DOCTYPE html>
<html>
<head>
	<title>Formulário de envio</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Formulário de envio</h1>
		<form action="enviar.php" method="post" enctype="multipart/form-data">
			<label for="descricao">Descrição:</label>
			<input type="text" name="descricao" required>
			<label for="imagem">Imagem:</label>
			<input type="file" name="imagem" required>
			<label for="numero">Número de celular:</label>
			<input type="tel" name="numero" required>
			<input type="submit" value="Enviar">
		</form>
	</div>
</body>
</html>
