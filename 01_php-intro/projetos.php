<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Nikolas Gabriel Stadler Silva
  Data       : 02/03/26
-->
<?php 
$pagina_atual = "projetos";
$nome = "Nikolas Gabriel Stadler Silva"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos <?php echo $nome ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "includes/cabecalho.php" ?>

    <div class="item1">
        <h2>Projeto Portfolio com HTML e CSS</h2>
        <p>
            Portfolio feito na disciplina WEB-II para relembrar conceitos sobre HTML e CSS
        </p>
    </div>
    <div class="item2">
        <h2>Projeto Portfolio com HTML, CSS e PHP</h2>
        <p>
            Portfolio feito na disciplina WEB-II para entender conceitos sobre PHP e includes
        </p>
    </div>
    <div class="item3">
        <h2>Sistema de musicas</h2>
        <p>
            Um sistema CRUD de musicas feito em WEB-I o sistema tinha todas as funcionalidades de adicionar apagar ler e atualizar
        </p>
    </div>


    <?php include "includes/rodape.php" ?>
</body>
</html>
