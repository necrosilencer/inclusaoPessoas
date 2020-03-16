<style>
	td {text-align: center;}
	tr {text-align: center;}
	div{text-align: center;}

</style>
<meta charset="utf8">

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
header("content-type: text/html, charset=utf8");
//definindo o fuso horário
date_default_timezone_set('America/Sao_Paulo');

//vamos utilizar a conexão que está na aula 9 
include ("../Aula9/conectarsqli.php");

$sql="SELECT * FROM dados_profissionais ORDER BY nome ASC"; 
//ASC = ASCENDENTE = CRESCENTE
//DESC = DECRESCENTE

//executando o comando que está no $sql
$registro = mysqli_query($conn,$sql);


 ?>

 <table class="table table-striped">
 	<tr>
 		<th>Id</th>
 		<th>Nome</th>
 		<th>Cargo</th>
 		<th>Salário</th>
 		<th>Registro</th>
 		<th>Dep.</th>
 		<th>Alterar</th>
 		<th>Excluir</th>
 	</tr>
	<?php 

	while ($campo=mysqli_fetch_array($registro))
	{
		?>

		<tr>
			<td><?php echo $campo['id']; ?></td>
			<td><?php echo $campo['nome']; ?></td>
			<td><?php echo $campo['cargo']; ?></td>
			<td><?php echo 'R$ ' . number_format($campo['salario'], 2, ',', '.'); ?>
				<!-- number_format(campo,número de casas decimais, separador casa decimal, separador de milhar) -->
			</td>

			<td><?php echo date("d/m/Y",strtotime($campo['dataRegistro'])); ?></td>
			<td><?php echo $campo['dependentes']; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $campo['id']; ?>">✏️
				</a>
			</td>

			<td><a href="excluir.php?id=<?php echo $campo['id']; ?>">🗑️</a></td>
		</tr>

		<?php 
			}   //fechamento do while
			mysqli_close($conn);

		 ?>
 </table>

<div>
 <button onclick="voltar()">Voltar</button>
</div>
	

	<script>
		function voltar() {
			window.location.href="index.html";
		}

	</script>

