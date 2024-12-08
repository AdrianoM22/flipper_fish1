<?php 
    $servidor="localhost";
    $usuario ="root";
    $senha ="123456";
    $banco="FLIPER_FISH";
    $cmd=new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>  