<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadrasto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" >
    <link rel="icon" href="fotos/logo.ico" >

</head>
<body>

<div class="container">
    <div class="row content">
        <div class="col-md-6">
            <h3 class="signin-text mb-3">Cadrasto</h3>
            <form  class="was-validated" method="post" action="controle.php?opcao=cadrastar">
            <label for="name">Nome:</label>
                <input type="name" class="form-control" id="name" placeholder="Insira o nome" name="name" required>
                <div class="valid-feedback">Válido ✅</div>
                <div class="invalid-feedback">Preencha corretamente.</div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Insira o email" name="email" required>
                <div class="valid-feedback">Válido ✅</div>
                <div class="invalid-feedback">Preencha corretamente.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Senha:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Insira a senha" name="pwd" required>
                <div class="valid-feedback">Válido ✅</div>
                <div class="invalid-feedback">Preencha corretamente.</div>
            </div>
            <div class="form-group">
                <label for="date">Data de nascimento:</label>
                <input type="date" class="form-contssrol" id="date" placeholder="Insira o dia do seu nascimento" name="date" required>
                <div class="valid-feedback">Válido ✅</div>
                <div class="invalid-feedback">Preencha corretamente.</div>
            </div>    
            <button type="submit" class="btn btn-primary">Cadrastar</button>
             
        </div>
            </form>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>