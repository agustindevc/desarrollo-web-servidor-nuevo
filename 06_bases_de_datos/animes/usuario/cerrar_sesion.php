<?php
    sesion_start();
    session_destroy();
    header("lcoation: iniciar_sesion.php");
    exit;
?>