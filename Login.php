<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="d-flex flex-column align-items-center col-6">
    <div class="col-12">
    <form method="post">
    <div class="form-group row">
    <div class="col-12">
    Digite o seu nome de usuário:<input class="form-control form-control-lg" type="text" name="Login" placeholder="Nome..."></input><br>
        </div>
        <div class="col-12">
        Digite a sua senha: <input class="form-control form-control-lg" type="password" name="Password" placeholder="Senha..."></input><br>
</div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar" >Entrar</button>
        </div>
</div>
</form>
</div>
</div>
</body>
<?php
if (isset($_POST['Login']) && isset($_POST))
        SESSION_start();
$SESSION['Login'] = $Login;
$SESSION['Password'] = $Password;
?>
</html>