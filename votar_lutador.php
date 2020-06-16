<!--CREATE-->
<?php

include 'conexao.php';
//cadastrar dados do form - post

$nome = $_POST['nome']; //recebe valor do atributo
$nota = $_POST['nota'];
$mes = $_POST['mes'];

//$file = $_POST['file'];

$sql = "INSERT INTO `lutadores`( `nome`, `nota`, `mes`) VALUES ('$nome',$nota,$mes)";  //inserir dados no banco
$results = $conexao->query($sql);

?>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alert</title>
    <style>
    body{
     background-color:black;   
    }
    </style>
</head>
<body>
<div class="alert alert-primary" role="alert">
  Lutador indicado com sucesso. Volte para a <a href="index.php" class="alert-link"> Página Inicial </a>. Obrigada!.
</div>
</div>
 <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>


        
