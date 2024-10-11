<?php
session_start();

if( isset( $SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    echo "Bem vinmdo a noessa pagina $nome";
}else{
    header("location:login.php");
}

