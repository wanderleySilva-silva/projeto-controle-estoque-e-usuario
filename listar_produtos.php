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
<h3 style="color: #000000;">Lista de Produtos</h3>

<table class="table" id="tabela">
  <thead>
    <tr>
      <th scope="col">Nº do Produto</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
  
    
    	<?php 
    		include 'conexao.php';
    		$sql = "SELECT * FROM `estoque`";
    		$busca = mysqli_query($conexao, $sql);

    		while ($array = mysqli_fetch_array($busca)){

    			$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];
    		
    	 		?>
    	 		<tr>

			      <td><?php echo $nroproduto ?></td>
			      <td><?php echo $nomeproduto ?></td>
			      <td><?php echo $categoria ?></td>
			      <td><?php echo $quantidade ?></td>
			      <td><?php echo $fornecedor ?></td>
			      <td>

			      	<?php

			      		if(($nivel == 1) || ($nivel == 2)){
			      		?>

			      	<a class="btn btn-dark btn-sm" style="color: #ffffff" href="editar_produto.php?id=<?php echo $id_estoque ?>" onclick="return confirm('Deseja editar este produto?');" data-toggle="tooltip" data-placement="top" title="Editar" role="button"><i class="far fa-edit"></i>&nbsp;</a>
			      	<?php }

			      	if(($nivel == 1)){
			      		?>
			      		<a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" onclick="return confirm('Deseja deletar este produto?');" data-toggle="tooltip" data-placement="top" title="Deletar" role="button"><i class="far fa-trash-alt"></i></a>
			      	<?php } ?>

			      </td>
			    </tr>

  <?php } ?>

  
</table>


	<div style="text-align: center;">

		<?php

			if(($nivel == 1) || ($nivel == 2)){
			?>
		<a class="btn btn-warning" id="botao" href="formulario_cadastro_produto.php" data-toggle="tooltip" data-placement="top" title="Novo Produto" role="button"><i class="fas fa-plus"></i></a>
		<?php } ?>
	</div>
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