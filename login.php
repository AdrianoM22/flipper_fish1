<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $cmd->query($sql_code) or die("Falha na execução do código SQL: " . $cmd->error);

        $quantidade = $sql_query->rowCount();

        if($quantidade == 1) {
            $usuario = $sql_query->fetch(PDO::FETCH_ASSOC);
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['cpf'] = $usuario['cpf'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];


            echo "<script language=javascript> 
            window.alert('Login concluido com sucesso'); 
            location.href='index.html';
        </script>"; 


        } else {
            echo "<script language=javascript> 
                        window.alert('Email ou senha incorreto'); 
                        location.href='login.html';
                    </script>"; 
        }

    }
}
?>
