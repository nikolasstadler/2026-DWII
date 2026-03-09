<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Nikolas Gabriel Stadler Silva
  Data       : 02/03/26
-->
<?php
$pagina_atual = "sobre";
$nome = "Nikolas Gabriel Stadler Silva"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre <?php echo $nome ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

        <h1>Sobre mim</h1>

        <div class="bio">
            <p>Meu nome é <?php echo $nome ?>. Moro em Ponta Grossa e não gosto nem um pouco do curos, TI não é exatamente o que eu tinha vontade de fazer vim e fico bem forçado pela minha mãe.</p>      
            <p>O que eu gosto é do tempo fora da sala jogar uma bola, sair para dar um rolê e aproveitar o final de semana.</p>
        </div>

    <?php include "includes/rodape.php" ?>
    
</body>
</html>
