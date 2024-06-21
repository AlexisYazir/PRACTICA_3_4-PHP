<?php
    $estatura = $_POST['estatura'];
    $edad = $_POST['edad'];
    $terminos = $_POST['terminos'];

    if ($terminos === "no") {
        echo "<h2>Debe aceptar no llevarnos a juicio por daños y perjuicios de un mal mantenimiento.</h2>";
    }
    else{
        echo "<h2>Felicidades, aqui tiene tu tiket</h2>";
        echo "<img src='imagen/tiket.jpg' alt='Ticket'>";
    }
?>