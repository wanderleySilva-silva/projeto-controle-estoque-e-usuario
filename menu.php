<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/d172c4eb8b.js" crossorigin="anonymous"></script>

</head>
<body style="background-color: #D8BFD8;">

  <?php 
    session_start();
    $usuario = $_SESSION['usuario'];

    if(!isset($_SESSION['usuario'])){
      header('Location: tela_login.php');
    }

  include 'conexao.php';

  $sql = "SELECT nivel_usuario FROM `usuarios` WHERE email_usuario='$usuario' and status='Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];

  ?>

<div class="container" style="margin-top: 100px;">

  <div style="text-align: right;">
    <a href="index.php" data-toggle="tooltip" data-placement="top" title="Sair" role="button" class="btn btn-sm btn-danger"><i class="fas fa-sign-out-alt"></i></a>
  </div>
	
<div class="row">

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar e excluir produtos do estoque.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Usuários</h5>
        <p class="card-text">Visualizar, editar e excluir usuários do sistema.</p>
        <a href="listar_usuarios.php" class="btn btn-primary">Usuários</a>
      </div>
    </div>
  </div>

<?php

  if(($nivel == 1) || ($nivel == 2)){
  ?>

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Cadastrar Usuários.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
  <?php } ?>

<?php

  if(($nivel == 1)){
  ?>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>

<?php } ?>

</div>

</div>


</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>