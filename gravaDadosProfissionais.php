<meta charset="utf8">
<?php 
header("content-type: text/html, charset=utf8");

//método foi post então estamos utilizando $_POST[]

//armazenando os conteúdos da variável $_POST nas respectivas
//variáveis locais
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tel = $_POST['tel'];

//vamos utilizar a conexão que está na aula 9 
include ("conectarsqli.php");

//criar a string para gravação
$sql = "INSERT INTO registros (nome,sobrenome,login,senha, salario,tel) VALUES ('$nome','$sobrenome','$login','$senha','$tel')";
	

//executando o comando que está no sql
	$resultado = mysqli_query ($conn, $sql);
	mysqli_close();	
	if ($resultado==true) {
		echo "<script>
				alert ('Informação armazenada com sucesso!');
				window.location.href='ex1.html';
			  </script>";
			  }
	else {
		echo "<script>
				alert ('Erro! Informação NÃO foi armazenada');
				window.location.href='ex1.html';

			</script>";
	}

	
 
 ?>