<?php
    session_start();
    if(!isset($_SESSION['tentativas'])){
        $_SESSION['tentativas'] = 0;
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" >
    <link rel="icon" href="fotos/logo.ico" >
</head>
<body>

<div class="container">
    <div class="row content">
        <div class="col-md-6 mb-3">
        <?php if($_SESSION['tentativas']>= 3){
            echo "<img src='fotos/teste.jpg'  alt=image'  width='400' height='300'>";
        } else{echo"<img src='fotos/cadeado.jpg'  alt='image'  width='400' height='300'>";} ?>
            
        </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-3">Login</h3>
            <form  class="was-validated" method="post" action="controle.php?opcao=entrar">
                <div class="form-group">
                    <label for="txtEmail">Email:</label>
                    <input type="email" class="form-control" id="txtEmail" placeholder="Insira o email" name="txtEmail" required>
                    <div class="valid-feedback">Válido ✅</div>
                    <div class="invalid-feedback">Preencha corretamente.</div>
                </div>
                <div class="form-group">
                    <label for="txtSenha">Senha:</label>
                    <input type="password" class="form-control" id="txtSenha" placeholder="Insira a senha" name="txtSenha" required>
                    <div class="valid-feedback">Válido ✅</div>
                    <div class="invalid-feedback">Preencha corretamente.</div>  
                </div>
                <?php if($_SESSION['tentativas'] >= 3) {
                ?> <button type="submit" class="btn btn-primary" disabled>Logar</button> <?php  } ?>
                <?php if($_SESSION['tentativas'] < 3){?> 
                    <button type="submit" class="btn btn-primary">Logar</button> 
                <?php } ?>  
                
            </form>
            </br>
            <p style="color: red;">
            <?php if($_SESSION['tentativas']>=1)
            { ?>Email ou senha errados, só tem 3 tentativas,você já utilizou    <?php echo $_SESSION['tentativas'];}?>
                <p>Não tem uma conta ainda? <a href="indexCadrasto.php">Cadastre-se aqui</a></p>
        </div>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>