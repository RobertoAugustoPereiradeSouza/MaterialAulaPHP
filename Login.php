<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header bg-info">
</div>
                    <div class="card-body">
                        <h4> Sistema de Login</h4>

                    <form action="" method="POST">
                <label>Digite seu nome: </label><br>
        
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="nome..."></input>
                    <label> Digite sua senha: </label>
                    <input type="password" name="senha" class="form-control" id="senha" placeholder="senha..."></input>
                    <input type="submit" class="btn btn-outline-primary mt-3" method="POST"></input>
                    <br>
            </form>
                    </div>
                        <div class="card-footer bg-info">
                    </div>
            </div>
        </div>         
    </div>
</div>
</body>
</html>