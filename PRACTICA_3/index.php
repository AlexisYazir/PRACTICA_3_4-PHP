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
    <title>Montaña Rusa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="MontañaRusa.php" method="POST">
            <h1>Formulario de Acceso</h1>
            <div>
              <label for="Estatura" class="form-label">Ingrese su Estatura</label>
              <div class="input-group">
                <input type="number" class="form-control" name="estatura" minlength="120" maxlength="230" placeholder="Ingrese su estatura en cm" pattern="[1-9]{2,3}" required>
              </div>
            </div>
            <div>
              <label for="Edad" class="form-label">Ingrese su Edad</label>
              <div class="input-group">
                <input type="number" class="form-control" name="edad" minlength="17" maxlength="150" placeholder="Edad minima de 16" required>
              </div>
            </div>

            <label class="condiciones">¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
            <input type="radio" id="acepta" name="terminos" value="si">
            <label for="si">Sí</label>
            <input type="radio" id="no_acepta" name="terminos" value="no">
            <label for="no">No</label>
            <div class="container btn">
            <button type="submit">Enviar</button>
        </div>
            
        </form>
    </div>
</body>
</html>