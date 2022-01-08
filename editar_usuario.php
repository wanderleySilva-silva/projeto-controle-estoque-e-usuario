<?php 

include 'conexao.php';

$id = $_GET['id'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/d172c4eb8b.js" crossorigin="anonymous"></script>

	<title>Atualização de Usuário</title>


	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}
		#botao {
			background-color: #FF1168;
			color: #ffffff;
		}
	</style>
</head>
<body style="background-color: #FAFAD2;">
<div class="container" id="tamanhoContainer" style="margin-top: 40px;">

<div style="text-align: right; margin-bottom: 10px;">
	<a href="listar_usuarios.php" data-toggle="tooltip" data-placement="top" title="Voltar" role="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i></a>
</div>

	<h4>Formulário de Cadastro</h4>
	<form action="_atualizar_usuario.php" method="post" style="margin-top: 20px">
		<?php 

		$sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
		$buscar = mysqli_query($conexao, $sql);
		while ($array = mysqli_fetch_array($buscar)){

			$id_usuario = $array['id_usuario'];
    		$nome_usuario = $array['nome_usuario'];
    		$email_usuario = $array['email_usuario'];
            $nivel_usuario = $array['nivel_usuario'];

	 	?>

		  	<div class="mb-3">
			    <label>Nome do usuário</label>
			    <input type="text" class="form-control" name="nome_usuario" value="<?php echo $nome_usuario ?>">
				<input type="number" class="form-control" name="id" value="<?php echo $id_usuario ?>" style="display: none">
		  	</div>

            <div class="mb-3">
			    <label>E-mail do usuário</label>
			    <input type="email" class="form-control" name="email_usuario" value="<?php echo $email_usuario ?>">
		  	</div>

		  	<div class="mb-3">
			      <label>Nível</label>
			      <select class="form-control" name="nivel_usuario">
			        <option>Administrador</option>
			       	<option>Funcionário</option>
			       	<option>Conferente</option>
			      </select>
		    </div>

		    <div style="text-align: right; margin-top: 10px;">
		    	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
		    </div>
		<?php } ?>
	</form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>