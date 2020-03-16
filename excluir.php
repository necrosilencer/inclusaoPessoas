<?php 	
header('content-type:text/html;charset=utf8');
include ("../aula9/conectarsqli.php");

$id=$_GET['id'];


$sql="DELETE FROM dados_profissionais WHERE id=$id";

$resultado = mysqli_query($conn,$sql);


if ($resultado == TRUE){

	echo "<script>alert('O arquivo foi deletado com sucesso!!!);window.location.href='ex2.php'</script>";
}
else {
	echo "<script>alert('Erro na exclusão do arquivo!!!);window.location.href='ex2.php'</script>";
}

 ?>