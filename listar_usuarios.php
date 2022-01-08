<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/d172c4eb8b.js" crossorigin="anonymous"></script>

	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}
		#tabela {
			color: #000000;
		}

		#botao {
			background: #FFA500;
			color: #000000;
			border-radius: 50px;
			border: none;
			padding-bottom: 10px;
			padding-top: 10px;
			padding-right: 15px;
			padding-left: 15px;
			margin: 50px;
		}

	</style>


</head>


<body style="background-color: #D8BFD8;">


<?php

    session_start();
    $usuario = $_SESSION['usuario'];

    if(!isset($_SESSION['usuario'])){
      header('Location: tela_login.php');

    }

    include 'conexao.php';

    $sql = "SELECT nivel_usuario FROM `usuarios` WHERE email_usuario = '$usuario' and status = 'Ativo'";
    $buscar = mysqli_query($conexao,$sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivel_usuario'];

   ?>


<div class="container" style="margin-top: 40px;">
<br>
<div style="text-align: left;">
	<a href="menu.php" data-toggle="tooltip" data-placement="top" title="Voltar" role="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i></a>
</div>

<div style="text-align: right;">
  <a href="index.php" data-toggle="tooltip" data-placement="top" title="Sair" role="button" class="btn btn-sm btn-danger"><i class="fas fa-sign-out-alt"></i></a>
</div>
<h3 style="color: #000000;">Lista de Usuários</h3>

<table class="table" id="tabela">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>


    </tr>
  </thead>
  
    
    	<?php 
    		include 'conexao.php';
    		$sql = "SELECT * FROM `usuarios`";
    		$busca = mysqli_query($conexao, $sql);

    		while ($array = mysqli_fetch_array($busca)){

    			$id_usuario = $array['id_usuario'];
    			$nome_usuario = $array['nome_usuario'];
    			$email_usuario = $array['email_usuario'];
    			$nivel_usuario = $array['nivel_usuario'];
    			$status = $array['status'];
    		
    	 		?>
    	 		<tr>

			      <td><?php echo $nome_usuario ?></td>
			      <td><?php echo $email_usuario ?></td>
			      <td><?php echo $nivel_usuario ?></td>
			      <td><?php echo $status ?></td>
			      <td>

			      	<?php

			      		if(($nivel == 1) || ($nivel == 2)){
			      		?>

			      	<a class="btn btn-dark btn-sm" style="color: #ffffff" href="editar_usuario.php?id=<?php echo $id_usuario ?>" onclick="return confirm('Deseja editar este usuário?');" data-toggle="tooltip" data-placement="top" title="Editar" role="button"><i class="far fa-edit"></i>&nbsp;</a>
			      	<?php }

			      	if(($nivel == 1)){
			      		?>
			      		<a class="btn btn-danger btn-sm" href="deletar_usuario.php?id=<?php echo $id_usuario ?>" onclick="return confirm('Deseja deletar este usuário?');" data-toggle="tooltip" data-placement="top" title="Deletar" role="button"><i class="far fa-trash-alt"></i></a>
			      	<?php } ?>

			      </td>
			    </tr>

  <?php } ?>

  
</table>

</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
	
	$(document).ready(function(){

		$('button').tooltip();
	})


</script>
</body>
</html>