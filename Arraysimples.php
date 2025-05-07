<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Simples</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">


                <h1 class="text-dark text-center">
                    Trabalhando com Array
                </h1>
                <h4 class="text-dark ">
                    Construindo um array
                </h4>

                <p class="text-dark">
                    $dados = ['Banana, Maça, Goiaba'];
                </p>
                <p class="text-dark">
                    $dados = array['Banana, Maça, Goiaba'];
                </p>


                <h4 class="text-dark ">
                    Imprimindo o array na tela com o comando var_dump();
                </h4>
                
                <p class="text-dark">
                    <?php
                    $dados = ['Banana, Maça, Goiaba'];
                    echo var_dump($dados);
                    ?>
                </p>
               

                <h4 class="text-dark ">
                    Imprimindo o array na tela de forma organizada com o json_encode();
                </h4>
                
                <p class="text-dark">
                    <?php
                    $dados = ['Banana, Maça, Goiaba'];
                    echo json_encode($dados);
                    ?>
                </p>
                <p class="text-dark">
                   
                </p>
            </div>
        </div>
    </div>
</body>
</html>
