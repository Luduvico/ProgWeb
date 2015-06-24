<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<title>Minha primeira página</title>
	<h1>Este é um grande cabeçalho</h1>
	<h3>E este aqui é um pequeno cabeçalho</h3>
	</head>
	<body>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/><br/>
			Aqui vai um link: <a href="http://icomp.ufam.edu.br">http://icomp.ufam.edu.br</a>
		</p>
		<table border="0">
			<tr>
				<td>
					Seu nome
				</td>
				<td>
					<input type="text" name="nome" id="nome">
					<form method ="GET" action= "script.php">
						<input type="text" name="nome">
					</form>
				</td>
			</tr>
			<tr>
				<td>
					Seu sexo
				</td>
			<td>
				<form method="GET" action="script.php">
					<select name="sexo" id="sexo">
						<option value="1">Masculino</option>
						<option value="2">Feminino</option>
					</select>
				</form>
			</td>
			</tr>
			<tr>
				<td>
				Seus comentários
				</td>
				<td>
					<form method="GET" action="script.php">
						<textarea name="mensagem" rows="4" cols="50"></textarea>
					</form>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<form method="GET" action="script.php">
						<input type="submit" name="submit" id="submit" value="Enviar"/>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>
