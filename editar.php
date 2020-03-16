<?php 
header('content-type: text/html;charset=utf8');
date_default_timezone_set('America/Sao_Paulo');

session_start(); 

$id= $_GET['id'];
$_SESSION['id'] = $_GET['id'];
//pesquisar no banco de dados o restante dos campos através do $id
//vamos utilizar a conexão que está na aula 9 
include ("../Aula9/conectarsqli.php");
	
$sql = "SELECT * FROM dados_profissionais WHERE id=$id";
//executando.....
$registro = mysqli_query($conn,$sql);
if ($campo=mysqli_fetch_array($registro)) {
	//movimentando os dados trazidos do banco de dados para a memória .
	$nome = $campo['nome'];
	$registro = $campo['dataRegistro'];
	$salario = $campo['salario'];
	$dependentes=$campo['dependentes'];
	$cargo = $campo['cargo'];
}
unset($_POST);


?>

<form action="alterarRegistro.php" method="post" class="form-group">
		<label for="">Id</label>
		<input type="text" name="id" value="<?php echo $id; ?>" disabled="">
		<br><br>	
		<label for="">Nome</label>
		<input type="text" name="nome" maxlength="80" required=""  value="<?php echo $nome; ?>">
		<br><br>
		<label for="">Registro</label>
		<input type="date" name="registro" required=""  value="<?php echo $registro; ?>">
		<br><br>
		<label for="">Salário</label>
		<input type="text" name="salario" required=""  value="<?php echo $salario; ?>">
		<br><br>
		<label for="">Cargo</label>
		<input type="text" name="cargo" maxlength="30" required=""  value="<?php echo $cargo; ?>">
		<br><br>
		<label for="">Dependentes</label>
		<input type="number" name="dependentes" min="0" required="" size="10"  value="<?php echo $dependentes; ?>">
		<br><br>
		<input type="submit" value="Enviar">
		<input type="reset" value="Limpar" title="Apaga as informações da tela">
		<button onclick="voltar()">Voltar</button>
		<br>
		<br>
		<br>	
		

	</form>

		<script>
			function voltar(){

				window.location.href="ex2.php";
			}


		</script>