<?php

    //include("menu2.php");
    //include "menu.php"; // Não é necessário usar parenteses, mas é recomendado

    require("menu.php"); // O require é mais rigoroso, se o arquivo não for encontrado, ele gera um erro fatal e para a execução do script, enquanto o include apenas gera um aviso e continua a execução.
?>



    <hr>
    <h1>TESTE</h1>


    <?php
        include("menu.php"); 

    ?>

    



