<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <script src="assets/script.js" defer></script>
</head>
<body>
    <h1>Formulario CRUD</h1>
    <form id="formulario" method="POST" action="actions/create.php">
    <input type="hidden" id="id" name="id">
    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br>
    <input type="email" id="email" name="email" placeholder="Email" required><br>
    <input type="text" id="telefono" name="telefono" placeholder="Teléfono"><br>
    <input type="text" id="direccion" name="direccion" placeholder="Dirección"><br>
    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad"><br>
    <input type="text" id="ocupacion" name="ocupacion" placeholder="Ocupación"><br>

    <button type="submit">Guardar</button>
</form>

    <h2>Datos:</h2>
<table border="1">
    <thead>
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
</body>
</html>
