<?php 

include 'conexao.php';

$id = $_POST['id'];
$nomeusuario = $_POST['nome_usuario'];
$emailusuario = $_POST['email_usuario'];
$nivelusuario = $_POST['nivel_usuario'];

echo $sql = "UPDATE `usuarios` SET `nome_usuario`='$nomeusuario',`email_usuario`='$emailusuario',`nivel_usuario`=$nivelusuario WHERE id_usuario = $id";

//Professor, coloquei o ECHO acima, porque os valores editados não estão aparecendo no Banco e na tabela do site, por algum motivo.
//Mas com o ECHO é possível perceber que está sendo alterado os valores.

$atualizar = mysqli_query($conexao,$sql);

//header('Location: listar_usuarios.php');

 ?>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <!--<div class="container" style="width: 400px">
 	<center>
 		<h3>Usuário atualizado com sucesso.</h3>
 		<div style="margin-top: 10px;">
 			<a href="listar_usuarios.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
 		</div>
 	</center>
 	
 </div>