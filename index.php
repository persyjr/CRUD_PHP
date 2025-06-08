<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <script src="assets/script.js" defer></script>
</head>
<body>
    <h1>Formulario CRUD</h1>
    <form id="formulario">
        <input type="hidden" id="id">
        <input type="text" id="nombre" placeholder="Nombre" required><br>
        <input type="email" id="email" placeholder="Email" required><br>
        <input type="text" id="telefono" placeholder="Teléfono"><br>
        <input type="text" id="ciudad" placeholder="Ciudad"><br>
        <input type="text" id="profesion" placeholder="Profesión"><br>
        <input type="number" id="edad" placeholder="Edad"><br>
        <button type="submit">Guardar</button>
    </form>

    <h2>Datos:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th><th>Email</th><th>Teléfono</th><th>Ciudad</th>
                <th>Profesión</th><th>Edad</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tabla-datos"></tbody>
    </table>
</body>
</html>
