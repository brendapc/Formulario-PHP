<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>inscrição</title>
</head>
<body>
    <p>Formulário para inscrição dos competidores</p>
    <form action="script.php" method="post">
    <?php 
        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }


        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
    
    <p>seu nome <input type="text" name="nome"/></p>
    <p>sua idade <input type="text" name="idade"/></p>
    <p><input type="submit" value="enviar dados"/></p>
    </form>
</body>
</html>
