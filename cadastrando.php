<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando</title>
</head>
<body>
	<?php
	$con = mysqli_connect('localhost', 'root', '', 'cadastro');
	if (mysqli_connect_errno())
	{
	  	echo "Conexão falhou: " . mysqli_connect_error();
	}
	?>

	<?php
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = mysqli_query($con, "INSERT INTO USUARIOS(NOME, SOBRENOME, ESTADO, CIDADE, EMAIL, SENHA) VALUES('$nome', '$sobrenome', '$estado', '$cidade', '$email', '$senha')");
		mysqli_close($con);
		echo "Dados cadastrados com sucesso!";
	?>
</body>
</html>