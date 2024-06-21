<?php
    $correo=$_POST['correo'];
    $pws1 = $_POST['pw1'];
    $pws2 = $_POST['pw2'];

    if ($pws1 !== $pws2) {
        echo "<h2>Ingreso una contraseña incorrecta</h2>";
    }
    else{
        echo "<h2>Felicidades ".$correo." Sus datos son completemente validos</h2>";
    }
?>