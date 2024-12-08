<?php 
       include '.\conexao.php';
       $vcpf= $_POST['txtcadcpf'];
       $vnom=$_POST['txtcadnome'];
       $vema=$_POST['txtcademail'];
       $vsen=$_POST['txtcadsenha'];
       $vsenr=$_POST['txtcadRepsenha'];

       $incluir=$cmd->query("insert into usuarios(nome,cpf,email,senha,repetir_senha)
                            values('$vnom','$vcpf','$vema','$vsen','$vsenr')");


       echo "<script language='JavaScript'>
              alert('Dados cadastrados com sucesso!!!');
              location.href='index.html';
              </script>";
?>