<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="HTML/CSS/perfil.css">

    <link rel="icon" type="image/png" href="imgs/logo-baleia.png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Spicy+Rice&display=swap');
    </style>
</head>
<body>
    <h2 class="title-site" style="text-align: center; margin: 0; display: flex; justify-content: center; align-items: center;">
        <a href="index.html" class="link-title" style="display: flex; justify-content: center; align-items: center; width: 20%;" >
            FLIPPER FISH
            <img src="imgs/logo-baleia.png" height="80px">
        </a>
    </h2>

    <h1>Bem vindo ao Painel do Usuario</h1> 
    
    <div class='container'>
        <p><span>Nome:</span> <?php echo $_SESSION['nome']; ?></p>
        <p><span>CPF:</span> <?php echo $_SESSION['cpf']; ?></p>
        <p><span>Email:</span> <?php echo $_SESSION['email']; ?></p>
        <p><span>Senha:</span> <?php echo $_SESSION['senha']; ?></p>
    </div>

    <button class="btns" onClick="location.href='index.html'">
        Voltar ao menu
    </button>

    <button class="btns" onClick="location.href='logout.php'">
        Sair da conta
    </button>
</body>
</html>