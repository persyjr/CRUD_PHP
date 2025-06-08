function cargarDatos() {
    fetch("actions/fetch.php")
        .then(res => res.json())
        .then(data => {
            const tabla = document.getElementById("tabla-datos");
            tabla.innerHTML = "";

            data.forEach(persona => {
                const fila = document.createElement("tr");

                fila.innerHTML = `
                    <td>${persona.nombre}</td>
                    <td>${persona.email}</td>
                    <td>${persona.telefono}</td>
                    <td>${persona.ciudad}</td>
                    <td>${persona.profesion}</td>
                    <td>${persona.edad}</td>
                    <td>
                        <button onclick='editar(${JSON.stringify(persona)})'>Editar</button>
                        <button onclick='eliminar(${persona.id})'>Eliminar</button>
                    </td>
                `;
                tabla.appendChild(fila);
            });
        });
}

function eliminar(id) {
    if (!confirm("¿Seguro que deseas eliminar este registro?")) return;
    fetch("actions/delete.php", {
        method: "POST",
        body: JSON.stringify({ id })
    }).then(() => cargarDatos());
}

function editar(persona) {
    for (let key in persona) {
        if (document.getElementById(key)) {
            document.getElementById(key).value = persona[key];
        }
    }
}

document.getElementById("formulario").addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = {
        id: document.getElementById("id").value || null,
        nombre: document.getElementById("nombre").value,
        email: document.getElementById("email").value,
        telefono: document.getElementById("telefono").value,
        ciudad: document.getElementById("ciudad").value,
        profesion: document.getElementById("profesion").value,
        edad: document.getElementById("edad").value,
    };

    const url = formData.id ? "actions/update.php" : "actions/create.php";

    fetch(url, {
        method: "POST",
        body: JSON.stringify(formData)
    }).then(() => {
        document.getElementById("formulario").reset();
        document.getElementById("id").value = "";
        cargarDatos();
    });
});

setInterval(cargarDatos, 4000); // recarga cada 4 segundos
window.onload = cargarDatos;
