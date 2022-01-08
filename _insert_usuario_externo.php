<?php 

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,status) values ('$nomeusuario','$email',sha1('$senha'),'$status')";

$inserir = mysqli_query($conexao,$sql);

 ?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <div class="container" style="width: 400px">
	<center>
		<h3>Usuário adicionado com sucesso, esperando aprovação.</h3>
		<div style="margin-top: 10px">
			<a href="menu.php" class="btn btn-sm btn-warning" style="color: #fff">Continuar</a>
		</div>
	</center>
</div>