<?php
    $estatura = $_POST['estatura'];
    $edad = $_POST['edad'];
    $terminos = $_POST['terminos'];

    if ($terminos === "no") {
        echo "<h2>Debe aceptar no llevarnos a juicio por daños y perjuicios de un mal mantenimiento.</h2>";
    }
    else{
        echo "<form>";
        echo "<h2>Hola, Felicidades<br> Cumples  con los requisitos para ingresar a la montaña rusa</h2>";
        echo "<h2>Su estaturan es ".$estatura."cm</h2>";
        echo "<h2>Aqui tiene su tiket</h2>";
        echo "<img src='imagen/tiket.jpg' alt='Ticket'>";
        echo "</form>";
    }
?>