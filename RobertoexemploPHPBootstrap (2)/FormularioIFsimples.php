<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-12 col-md-6">
                <form method="post">
                    <label class="mt-5">Digite o seu nome:</label><br>
                    <input class="w-100" type="text" name="nome"><br>
                    <button class="btn btn-outline-primary w-25 mt-3" type="submit" >Enviar</button>
</form>
    </div>
    <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-8 col-sm-12 col-md-6">
      <div class="alert alert-info" role="alert" style="text-align:center;font-size:35px">
      <h3>
        <?php
        if (isset($_POST['nome'])){
            echo "Seja bem vindo ".$_POST['nome']."";
        } else {
            echo "Digite o seu Nome...";
        }
        ?>
        </h3>
</body>
</html>