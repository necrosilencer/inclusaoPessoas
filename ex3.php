<?php 
header("content-type: text/html, charset=utf8");
$id=$_POST["id"];
$sql="SELECT * FROM dados_profissionais WHERE id-$id"; 
include ("../aula9/conectarsqli.php");
$registro = mysqli_query($conn,$sql);
if ($campo=mysqli_fetch_array($registro)){
	$nome = $campo['nome'];
	$registro = $campo['dataRegistro'];
	$salario = $campo['salario'];
	$dependentes =$campo['dependetes'];
	$cargo = $campo['cargo']; }

 ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<form action="gravaDadosProfissionais.php" method="post" class="form-group">
		<label for="">ID</label>
		<input type="text" name="id" maxlength="80" required="" value="<?php echo $id ?>">	

		<label for="">Nome</label>
		<input type="text" name="nome" maxlength="80" required="" value="<?php echo $nome ?>">
		<br><br>
		<label for="">Registro</label>
		<input type="date" name="registro" required="" value="<?php echo $registro ?>">
		<br><br>
		<label for="">Salário</label>
		<input type="text" name="salario" required="" value="<?php echo $salario ?>">
		<br><br>
		<label for="">Cargo</label>
		<input type="text" name="cargo" maxlength="30" required="" value="<?php echo $cargo ?>">
		<br><br>
		<label for="">Dependentes</label>
		<input type="number" name="dependentes" min="0" required="" size="10" value="<?php echo dependentes ?>">
		<br><br>
		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar" title="Apaga as informações da tela">
		<button onclick="voltar()">Voltar</button>
	</form>


	<script>
		function voltar() {
			window.location.href="index.html";
		}

	</script>
	
</body>
</html>