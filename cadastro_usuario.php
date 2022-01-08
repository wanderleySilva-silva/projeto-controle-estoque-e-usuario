<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Cadastro de Usuário</title>

	<script src="https://kit.fontawesome.com/d172c4eb8b.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

</head>

<body style="background-color: #D8BFD8;">

<div class="container" style="width: 400px; margin-top: 40px; border-radius: 15px; background-color: #ffffff;">

	<div style="text-align: right">
		<a href="menu.php" style="margin-top: 10px;" data-toggle="tooltip" data-placement="top" title="Voltar" role="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i></a>
	</div>

	<h4>Cadastro de Usuário</h4>
	<form action="_insert_usuario_externo.php" method="post">
		<div class="mb-3">
			<label>Nome do Usuário</label>
			<input type="text" class="form-control" name="nomeusuario" placeholder="Nome completo" autocomplete="off" required>
		</div>

		<div class="mb-3">
			<label>E-mail</label>
			<input type="email" class="form-control" name="emailusuario" placeholder="Seu E-mail" autocomplete="off" required>
		</div>

		<div class="mb-3">
			<label>Senha do Usuário</label>
			<input id="txtSenha" type="password" name="senhausuario" class="form-control"required autocomplete="off" placeholder="Senha">
		</div>
		<span></span>

		<div class="mb-3">
			<label>Repetir Senha</label>
			<input type="password" class="form-control" name="senhasuario2" required autocomplete="off" placeholder="Repita a senha" oninput="validaSenha(this)">
			<small>Precisa ser igual a senha digitada acima.</small>

		</div>

		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success" style="margin-bottom: 10px;">Cadastrar</button>
		</div>

	</form>
	
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>

</html>