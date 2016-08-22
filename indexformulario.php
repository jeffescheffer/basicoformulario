<!DOCTYPE html>
<html>
<head>
	<title>Formulario 1</title>
</head>
<body>

<form action="processa_dados.php">
	<p>O que você achou do site?
	<br>
	<input type="radio" name="avaliacao" value="muitobom" checked>Muito Bom
	<input type="radio" name="avaliacao" value="bom">Bom
	<input type="radio" name="avaliacao" value="regular">Regular
	<input type="radio" name="avaliacao" value="umlixo">Um lixo
	</p>
	<p>Qual a seção que você mais gostou?
	<select name="secao" size="1">
		<option value="emcartaz">Em Cartaz</option>
		<option value="trilhasonora">Trilha Sonora</option>
		<option value="fotos">Galeria de Fotos</option>
		<option value="bilheteria">Bilheteria</option>
		<option value="outra">Outra</option>
	</select>
	</p>
	<p>
		Digite seus comentários no espaço abaixo:<br>
		<textarea name="comentarios" rows="5" cols="42"></textarea>
	</p>
	<p>Diga-nos como entrar em contato com você:<br>
	Nome <input type="text" name="nome" size="35" maxlength="256"><br>
	E-mail <input type="text" name="email" size="35" maxlength="256"><br>
	Fone <input type="text" name="fone" size="35" maxlength="256"> 
	</p>
	<input type="checkbox" name="novidades" value="nov">
	Quero receber as novidades do site por e-mail
	<p>
		<input type="submit" name="submite" value="Enviar Dados">
		<input type="reset" name="reset" value="Limpar Formulários">
	</p>
</form>

</body>
</html> 