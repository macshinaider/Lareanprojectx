<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="form-container">
		<form method="POST" action="enviar.php" enctype="multipart/form-data">
			<label for="nome">Nome:</label>
			<input type="text" id="nome" name="nome" required>

			<label for="imagem">Imagem:</label>
			<input type="file" id="imagem" name="imagem">

			<label for="celular">Celular:</label>
			<input type="tel" id="celular" name="celular" required>

			<input type="submit" value="Enviar">
		</form>
	</div>
</body>
</html>
