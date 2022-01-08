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

	<title>Formulário de Cadastro</title>


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
	<a href="listar_produtos.php" data-toggle="tooltip" data-placement="top" title="Voltar" role="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i></a>
</div>

	<h4>Formulário de Cadastro</h4>
	<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
		<?php 

		$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
		$buscar = mysqli_query($conexao, $sql);
		while ($array = mysqli_fetch_array($buscar)){

			$id_estoque = $array['id_estoque'];
    		$nroproduto = $array['nroproduto'];
    		$nomeproduto = $array['nomeproduto'];
    		$categoria = $array['categoria'];
    		$quantidade = $array['quantidade'];
    		$fornecedor = $array['fornecedor'];

	 		?>

			<div class="mb-3">
			    <label>Número do produto</label>
			    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
			    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
		  	</div>

		  	<div class="mb-3">
			    <label>Nome do produto</label>
			    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
		  	</div>

		  	<div class="mb-3">
			      <label>Categoria</label>
			      <select class="form-select" name="categoria">
			        <option>Periféricos</option>
			       	<option>Hardware</option>
			       	<option>Software</option>
			       	<option>Smartphones</option>
			      </select>
		    </div>

		  	<div class="mb-3">
			    <label>Quantidade</label>
			    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
		  	</div>

		  	<div class="mb-3">
			      <label>Fornecedor</label>
			      <select class="form-select" name="fornecedor">
			        <option>Fornecedor A</option>
			       	<option>Fornecedor B</option>
			       	<option>Fornecedor C</option>
			      </select>
		    </div>
		    <div style="text-align: right;">
		    	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
		    </div>
		<?php } ?>
	</form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>