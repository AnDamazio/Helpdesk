<?php
    session_start();
    //Destruir UM índice do array de sessão
    //unset($_SESSION['x']);


    //Destruindo os dados de sessão 
    session_destroy();
    header('Location: index.php');

    
?>