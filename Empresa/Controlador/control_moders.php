<?php
    require_once("Modelo/log_moders.php");

    $mostrar = new Moderadores(NULL, NULL, NULL, NULL);
    $mostrar_var = $mostrar->Mostrar();
?>