<?php

session_start();

if(isset($_POST['submit']))
{
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$password')");

    if($result) {

        $_SESSION['usuario_nome'] = $nome;
        $_SESSION['usuario_email'] = $email;
        $_SESSION['logado'] = true;


        header("Location: inicialsf.html");
        exit();
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <!-- Configurações básicas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

    <!-- CSS -->
    <link rel="stylesheet" href="cadastrosf.css">

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="https://png.pngtree.com/png-vector/20190901/ourlarge/pngtree-excercise-icon-in-trendy-style-isolated-background-png-image_1718600.jpg">

</head>

<body>

    <!-- ========================================= -->
    <!-- FORMULÁRIO DE CADASTRO -->
    <!-- ========================================= -->
<div class="container">
        <h2>Cadastro Da Academia</h2>

        <form action="" method="POST">

            <input type="text" name="nome" placeholder="Nome completo" required>

            <input type="email" name="email" placeholder="E-mail" required>

            <input type="password" name="password" placeholder="Senha" required>

            <input type="password" name="confirm_password" placeholder="Confirmar Senha" required>

            <button type="submit" name="submit">Criar</button>

        </form>

        <p class="link">
            Já possui uma conta?
            <a href="loginsf.php">Login</a>
            <br><br>
        </p>

        <a class="bb" href="inicialsf.php">Voltar</a>
    </div>

</body>

</html>
