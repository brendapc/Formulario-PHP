<?php

function validaNome(string $nome) : bool {
    if(empty($nome)){
        setarMensagemErro(mensagem: 'o nome não pode ser vazio');    
        return false;
    }   
    else if(strlen($nome) < 3){
        setarMensagemErro(mensagem: ' o nome não pode conter menos de 3 caracteres'); 
        return false;
        
    }
    else if(strlen($nome)>30){
        setarMensagemErro(mensagem: 'o nome é muito extenso');
        return false;
    }
    return true;

}
function validarIdade(string $idade): bool{ 
    if(!is_numeric($idade)){

        setarMensagemErro(mensagem: 'informe um numero para idade');
        return false;
    }
    return true;
}

