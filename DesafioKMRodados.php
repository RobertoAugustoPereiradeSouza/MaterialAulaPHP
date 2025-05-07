<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cante quilômetros</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form action="" method="POST">
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control form-control-lg" name="km" id="km" placeholder="Qtde de km rodados">
                        </div>
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Cante</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 alert alert-info">
                <?php
                    if (isset($_POST['km'])) {
                        $km = $_POST['km'];
                        for ($i = $km; $i > 0; $i--){
                            if ($i % 2 == 0){
                                echo "<p class='text-dark'>{$i} quilometros...</p>";
                                echo "<p class='text-dark'>";
                                for ($j = 0; $j < 2; $j++){
                                    echo "{$i} quilometros, ";
                                }
                                echo " pare um pouquinho, descanse um pouquinho</p>";
                            } else if ($i == 1){
                                echo "<p class='text-dark'>{$i} quilometro...</p>";
                                echo "<p class='text-dark'>{$i} quilometro, pare um pouquinho, descanse um pouquinho</p>";
                            } else {
                                echo "<p class='text-dark'>{$i} quilometros...</p>";
                                echo "<p class='text-dark'>{$i} quilometros, pare um pouquinho, descanse um pouquinho</p>";
                            }
                        }
                    } else {
                        echo '<p class="text-dark">Digite o km rodado </p>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>