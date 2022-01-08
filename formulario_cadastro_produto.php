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
			color: #ffffff;
		}
	</style>
</head>
<body style="background-color: #7d93a6; color: #ffffff;">

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">

	<div style="text-align: right">
		<a href="listar_produtos.php" data-toggle="tooltip" data-placement="top" title="Voltar" role="button" class="btn btn-sm btn-primary" style="margin-right: 407px;"><i class="fas fa-arrow-left"></i></a>
  		<a href="index.php" data-toggle="tooltip" data-placement="top" title="Sair" role="button" class="btn btn-sm btn-danger"><i class="fas fa-sign-out-alt"></i></a>
	</div>

	<h4 style="margin-top: 15px">Formulário de Cadastro</h4>
<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
	<div class="mb-3">
	    <label style="margin-bottom: 10px;">Número do produto</label>
	    <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
  	</div>

  	<div class="mb-3">
	    <label style="margin-bottom: 10px;">Nome do produto</label>
	    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
  	</div>

  	<div class="mb-3">
	      <label style="margin-bottom: 10px;">Categoria</label>
	      <select class="form-select" name="categoria">
	        <option>Periféricos</option>
	       	<option>Hardware</option>
	       	<option>Software</option>
	       	<option>Smartphones</option>
	      </select>
    </div>

  	<div class="mb-3">
	    <label style="margin-bottom: 10px;">Quantidade</label>
	    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
  	</div>

  	<div class="mb-3">
	      <label style="margin-bottom: 10px;">Fornecedor</label>
	      <select class="form-select" name="fornecedor">
	        <option>Fornecedor A</option>
	       	<option>Fornecedor B</option>
	       	<option>Fornecedor C</option>
	      </select>
    </div>
    <div style="text-align: right;">
    	<button type="submit" id="botao" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Cadastrar">Cadastrar</button>
    </div>

</form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>