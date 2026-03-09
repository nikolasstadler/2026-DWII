<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Nikolas Gabriel Stadler Silva
  Data       : 02/03/26
-->
<?php
$cor_inicio   = ($pagina_atual === "inicio")   ? "color: #000000; font-weight: bold;" : "color: white;";
$cor_sobre    = ($pagina_atual === "sobre")    ? "color: #000000; font-weight: bold;" : "color: white;";
$cor_projetos = ($pagina_atual === "projetos") ? "color: #000000; font-weight: bold;" : "color: white;";
?>
<nav>
    <a href="index.php" style="<?php echo $cor_inicio; ?>">Inicio</a>
    <a href="sobre.php" style="<?php echo $cor_sobre; ?>">Sobre</a>
    <a href="projetos.php" style="<?php echo $cor_projetos; ?>">Projetos</a>
</nav>