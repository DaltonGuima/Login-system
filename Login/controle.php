<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'tsuna4455', 'login');
$op = $_GET["opcao"];
switch ($op){
    case "entrar":
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];
    $verifica = mysqli_query($conn, "SELECT * FROM cadrasto WHERE email_cadrasto = '$email' AND senha_cadrasto = '$senha'") or die('erro no banco');
    if(mysqli_num_rows($verifica)<=0) {
        $_SESSION['tentativas'] += 1;
        header("Location:index.php");
    }
     else {
        $_SESSION['tentativas'] = 0;
        header("Location:jose.html");    
    }
    break;
    case "cadrastar":
    $login = $_POST["email"];
    $pwd = $_POST["pwd"];
    $name = $_POST["name"];
    $datanas = $_POST["date"];
    $veri = mysqli_query($conn, "insert into cadrasto(email_cadrasto,senha_cadrasto,nome_cadrasto,datanas_cadrasto) values('$login','$pwd','$name','$datanas');") or die('erro no banco');
    $_SESSION['tentativas'] = 0;
    echo "<script>alert('Cadrastado com sucesso')</script>";
    header("Location:index.php");
    break;
}

?>