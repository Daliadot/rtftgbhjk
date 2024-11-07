<?php
// Verifica se o cookie 'botao' está definido, caso contrário, inicializa como 'branco'
$botao = isset($_COOKIE['botao']) ? $_COOKIE['botao'] : 'white';

// Verifica se o formulário foi enviado e altera a cor
if (isset($_POST["botao"])) {
    // Alterna entre 'branco' e 'preto' ao clicar no botão
    $botao = ($botao == 'white') ? 'black' : 'white';
    // Define o cookie por 2 minutos
    setcookie('botao', $botao, time() + 120, '/');
    // Atualiza a página para refletir a mudança de cor

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock in Rio</title>
    <!-- Mudando a cor de fundo com base no valor do cookie -->
    <style>
        body {
            background-color: <?php echo $botao; ?>;
            color: <?php echo $botao == 'black' ? 'white' : 'black'; ?>;
            transition: background-color 0.5s, color 0.5s;
        }
        .botao {
            border-radius: 10px;
            background-color: <?php echo $botao == 'black' ? 'white' : 'black'; ?> ;
            color: <?php echo $botao; ?>;
            align: 'center'
        }
    </style>
</head>
<body>
<h1 align='center'>
    Rock in Rio
</h1>
<hr>
<form action="" method="post">
     <input class="botao" type="submit" value="Clicar" name="botao">
</form>
<img src= "images.jpg">

</body>
</html>
