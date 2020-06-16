<?php

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $message = $_GET['message'];

    echo 'Datos del formulario: ' . $name . ' ' . $email . ' ' . $phone . ' ' . $message;
    echo '<br>';
    echo 'Enviar a ' . $email;

    //header('Location: ./index.html');

?>