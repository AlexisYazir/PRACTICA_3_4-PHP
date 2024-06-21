<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
      <!--Script JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>
    <title>Tiket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $estatura = $_POST['estatura'];
    $edad = $_POST['edad'];
    $terminos = $_POST['terminos'];

    if ($terminos === "no") {
        echo "<h2>Debe aceptar no llevarnos a juicio por daños y perjuicios de un mal mantenimiento.</h2>";
    }
    else{
        echo "<form class='container'>";
        echo "<h1>Hola, Felicidades<br> Cumples  con los requisitos para ingresar a la montaña rusa</h1>";
        echo "<h2>Su estaturan es ".$estatura."cm</h2>";
        echo "<h2>Aqui tiene su tiket</h2>";
        echo "<img src='imagen/tiket.jpg' alt='Ticket'>";
        echo "</form>";
    }
?>
</body>
</html>
