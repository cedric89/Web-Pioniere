<?php
    include_once('validate.php');

    $name = isset($_POST['name']) ? htmlentities(trim($_POST['name'])) : '';
    $vorname = isset($_POST['vname']) ? htmlentities(trim($_POST['vname'])) : '';
    $email = isset($_POST['mail']) ? htmlentities(trim($_POST['mail'])) : '';
    $nachricht = isset($_POST['msg']) ? htmlentities(trim($_POST['msg'])) : '';


    if (validateForm()) {
        header('Location: ../../../../index.php?id=10&thankyou=1');
    } else {
        // Zurückleiten an Kontaktformular
        header('Location: ../../../../index.php?id=6'.$params);
    }
?>