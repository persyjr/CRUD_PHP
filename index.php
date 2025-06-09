<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <script src="assets/script.js" defer></script>
    <!-- BOOTSTRAP  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body class=" container">
    <div class=" row d-flex justify-content-center">
    <div class=" card w-50">

        <div class="h2 text-center w-100" style="color: blue">Formulario</div>
        <form id="formulario" method="POST" action="actions/create.php" class="form-control  ">
                <input class="form-control" type="hidden" id="id" name="id">
                <input class="form-control"  class="form-control"  type="text" id="nombre" name="nombre" placeholder="Nombre" required><br>
                <input class="form-control"  type="email" id="email" name="email" placeholder="Email" required><br>
                <input class="form-control"  type="text" id="telefono" name="telefono" placeholder="Teléfono"><br>
                <input class="form-control"  type="text" id="direccion" name="direccion" placeholder="Dirección"><br>
                <input class="form-control"  type="text" id="ciudad" name="ciudad" placeholder="Ciudad"><br>
                <input class="form-control"  type="text" id="ocupacion" name="ocupacion" placeholder="Ocupación"><br>
                <button type="submit"  class="btn btn-primary form-control">Guardar</button>
        </form>
    </div>
    </div>
    <div class=" row d-flex justify-content-center">
    <div class=" card w-100">
    

    <h2 class="w-100 d-flex justify-content-center">Datos:</h2>
    <table border="1" class="table w-100 table-primary ">
    <thead class="table-primary">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Ocupación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody id="tabla-datos"></tbody>
</table>
</div>
</div>
</body>
</html>
