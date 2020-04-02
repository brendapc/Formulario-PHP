<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST["nome"];
$idade = $_POST["idade"];





if($idade >=6 && $idade<12){
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = 'o nadador '  . $nome . ' compete na ' . $categorias[$i];
            header('location: index.php');
        }
    }
}
else if($idade >=13 && $idade <= 18){
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'adoclescente'){
            $_SESSION['mensagem-de-sucesso'] = 'o nadador ' . $nome .' compete na ' . $categorias[$i];
            header('location: index.php');
        }
        }
    }
else if($idade >=18 && $idade < 60){
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            $_SESSION['mensagem-de-sucesso'] = 'o nadador '. $nome. ' compete na '. $categorias[$i];
            header('location: index.php');
        }
        }
    }
else{
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'idoso'){
            $_SESSION['mensagem-de-sucesso'] = 'o nadador ' . $nome .' compete na ' . $categorias[$i];
            header('location: index.php');
            return;
        }
        }
    }

?>