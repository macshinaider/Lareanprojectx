<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
	<h1>Formulário</h1>
	<form method="post" action="enviar.php">
		<label for="texto">Digite um texto:</label>
		<input type="text" id="texto" name="texto" required>
		<br><br>
        <label for="numero">Digite um número:</label>
		<input type="number" id="numero" name="numero" required>
        <br><br>
		<label for="imagem">Insira uma URL de imagem:</label>
		<input type="text" id="imagem" name="imagem" required>
        
		<br><br>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>