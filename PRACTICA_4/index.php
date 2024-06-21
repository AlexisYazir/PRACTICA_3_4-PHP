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
    <title>Identificación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="identificacion.php" method="POST">
    <h1>Formulario de Identificación</h1>
        <div>
            <label for="correo" class="form-label">Ingrese su correo</label>
            <div class="input-group">
              <input type="email" name="correo" class="form-control" id="validationDefault2" placeholder="Ingrese un correo valido" required>
            </div>
        </div>
        <div>
            <label for="pw1" class="form-label">Ingrese su contraseña</label>
            <input type="password" name="pw1" class="form-control"  minlength="8" maxlength="15" placeholder="Ingrese una contraseña minima de 8 caracteres" title="Ingrese una contraseña minima de 8 caracteres" required>
        </div>
        <div>
            <label for="pw2" class="form-label">Ingrese su contraseña</label>
            <input type="password" name="pw2" class="form-control" minlength="8" maxlength="15" placeholder="Confirme su contraseña" title="Ingrese una contraseña minima de 8 caracteres" required>
        </div><br>
        
        <div class="container btn">
            <button type="submit">Enviar</button>
            <button type="reset">Cancelar</button>
        </div>
        
    </form>
</div>
</body>
</html>