<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Nikolas Gabriel Stadler Silva
  Data       : 02/03/26
-->
<?php 
$pagina_atual = "inicio";
$nome  = "Nikolas Gabriel Stadler Silva";
$profissao = "Estudante";
$curso  = "Técnico em Informática - IFPR";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio <?php echo $nome ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
    <?php include "includes/cabecalho.php" ?>
    <img src="imgs/taquerai.jpg" alt="Foto de Nikolas">

    <section>
        <h2>Bem-vindo ao meu portfólio</h2><br>
        <p>Olá! Meu nome é <?php echo $nome ?>. Sou <?php echo $profissao ?> do 3º ano <?php echo $curso ?>.</p>
        <p>Esta página foi gerada pelo PHP em:
        <strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong></p>
    </section>
    </main>
    <?php include "includes/rodape.php" ?>
</body>
</html>