<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['cpf'])) {
        die("<script language=javascript> 
                    location.href='login.html';
                </script>");
    }

    else{
        if(isset($_POST['perfil'])){
            echo "<script language=javascript> 
                    location.href='perfil.php';
                </script>";
        };
    }
?>