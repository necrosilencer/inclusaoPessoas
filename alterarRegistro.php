<meta charset='utf8'>

<?php 	
header('content-type: text/html;charset=utf8');
date_default_timezone_set('America/Sao_Paulo');
session_start();



$id =$_SESSION['id'];
$nome =$_POST['nome'];
$cargo =$_POST['cargo'];
$registro =$_POST['registro'];
$salario =$_POST['salario'];
$dependentes=$_POST['dependentes'];

$comando = "UPDATE dados_profissionais SET nome='$nome',cargo='$cargo',dataRegistro='$registro',salario=$salario,dependentes=$dependentes WHERE id=$id";


include "../aula9/conectarsqli.php";

mysqli_query($conn,$comando);
mysqli_close($conn);


echo "<script>alert('Registro atualizado com sucesso!!!');
window.location.href='ex2.php';</script>";




 ?>