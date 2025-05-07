<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Array</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 sm-8 alert alert-info text-center">
            <h1 class= "text-dark text-center">
                informe o intervalo de números
            </h1>
            <form class="form-group" method="post">
                <div class="form-group row">
                    <input type="number" class="form-control form-control-lg" name="inicio" id="inicio">
                    <input type="number" class="form-control form-control-lg" name="fim" id="fim">
                    <input type="submit" class="btn btn-primary btn-lg btn-black" id ="mostrar">
                </div>    
            </form>
<?php
if (isset($_POST['inicio']) && isset($_POST['fim'])) {
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $pares = [];
    $impares = [];
    $somaPares = 0;
    $somaImpares = 0;
    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
            $somaPares += $i;
        } else {
            $impares[] = $i;
            $somaImpares += $i;
        }
    }
   echo "<h4 class='text-dark mt-4'>Pares:</h4>";
   //Count serve para contar todos os elementos de um array.
    for ($i = 0; $i < count($pares); $i++) {
        echo "<p>" . $pares[$i] . "</p>"; 
    }
    echo "<p>Soma dos Pares: " . $somaPares . "</p>";
    echo "<h4 class='text-dark mt-4'>Ímpares:</h4>";
    for ($i = 0; $i < count($impares); $i++) {
        echo "<p>" . $impares[$i] . "</p>"; 
    }
    echo "<p>Soma dos Ímpares: " . $somaImpares . "</p>";
}
?>