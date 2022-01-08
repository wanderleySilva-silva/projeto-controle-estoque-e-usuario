<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Tela de Login</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style type="text/css">
	#tamanho{
		width: 350px;
		
	}

	#botao{
		color: #000000;
		font-weight: bold;
	}

	#label{
		color: #000000;
		font-weight: bold;
	}
</style>

</head>
<body style="background-color: #612F74;">

	<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3; background-color: #ffffff;">
		<div style="padding: 10px;">
			
		<center>
			<img src="imagem/cadeado1.png" width="90px" height="90px">
		</center>
		<form action="index1.php" method="post">
			<div class="mb-3">
	    		<label id="label">Usuário</label>
	    		<input type="text" class="form-control" name="usuario" placeholder="Usuário" autocomplete="off" required>
  			</div>
  			<div class="mb-3">
	    		<label id="label">Senha</label>
	    		<input type="password" class="form-control" name="senha" placeholder="Senha" autocomplete="off" required>
  			</div>
		
			<div style="text-align: right;">
	    		<button type="submit" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Entrar" id="botao" style="background-color: #00FA9A;">Entrar</button>
	    	</div>
    	</form>
    </div>
		
	</div>

	<div style="margin-top: 10px">
		<center>
			<small style="color: #ffffff;">Você não possui cadastro? Clique <a style="color: #FF9933;" href="cadastro_usuario_externo.php"> aqui. </a></small>
		</center>
	</div>


	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>