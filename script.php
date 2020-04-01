<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome)){
    echo 'o nome não pode ser vazio';
    return;
}
if(strlen($nome) < 3){
    echo ' o nome não pode conter menos de 3 caracteres';
    return;
}
if(strlen($nome)>30){
    echo 'o nome é muito extenso';
    return;
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