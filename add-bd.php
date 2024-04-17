<?php

    $componente = $_POST['componente'];
    switch ($componente) {
        case 'processador';
            header('Location: add-proce-db.php');
            break;
        default:
            echo 'Componente não achado';
    }
?>