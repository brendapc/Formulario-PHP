<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST["nome"];
$idade = $_POST["idade"];


if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'o nome não pode ser vazio';
    header('location: index.php');
}   
if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = ' o nome não pode conter menos de 3 caracteres';
    header('location: index.php'); 
    
}
if(strlen($nome)>30){
    $_SESSION['mensagem-de-erro'] = 'o nome é muito extenso';
    header('location: index.php');
    
}
if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'informe um numero para idade';
    header('location: index.php'); 
    
}


if($idade >=6 && $idade<12){
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            echo 'o nadador '. $nome . ' compete na categoria '. $categorias[$i];
        }
    }
}else if($idade >=13 && $idade <= 18){
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'adoclescente'){
            echo 'o nadador '. $nome . ' compete na categoria '. $categorias[$i]; 
        }
    }
}else if($idade >=18 && $idade < 60){
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            echo 'o nadador '. $nome . ' compete na categoria '. $categorias[$i]; 
        }
    }
}else{
    for($i= 0; $i< count($categorias); $i++){
        if($categorias[$i] == 'idoso'){
            echo 'o nadador '. $nome . ' compete na categoria '. $categorias[$i];
        }
    }
}
?>