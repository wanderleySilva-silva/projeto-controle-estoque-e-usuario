<?php 

include 'conexao.php';

$id = $_GET['id'];


$deletar = "DELETE FROM `usuarios` where id_usuario = $id";
$fila = mysqli_query($conexao,$deletar);

header("Location: aprovar_usuario.php");//redireciona novamente para a página de aprovação.

 ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">