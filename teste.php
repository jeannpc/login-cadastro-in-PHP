<?php
include 'Contato.class.php';

$contato = new Contato();

$resultado = $contato-> insertUser($_POST["nome"], $_POST["email"], $_POST["senha"]);
if($resultado == true){
    echo"
    <script>
    alert('registro inserido com sucesso!')
    </script>";
}else {
    echo"
    <script>
    alert('Falha ao inserir o registro!')
    </script>";
}

$contato-> insertAtividade("jacrodillo", "17", "98536-0602");