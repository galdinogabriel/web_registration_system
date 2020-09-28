<?php

include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> 
        <title>consultas</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <li href="consultas.php">Cadastro</li>
                <li href="consultas.php">Consultas</li>
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <?php
                print "$registros registros encontrados.";
            ?>
           
        </section>
    </div>
</body>
</html>