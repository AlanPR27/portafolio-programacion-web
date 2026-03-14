function agregarFila() {

    // Limpiar mensaje anterior
    document.getElementById("mensaje").innerHTML = "";

    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var fechaHora = document.getElementById("fechaHora").value;
    var color = document.getElementById("color").value;
    var rango = document.getElementById("rango").value;

    // Validaciones de texto/email/datetime-local
    if (nombre == "") {
        document.getElementById("mensaje").innerHTML = "Falta llenar: Nombre";
        return;
    }
    if (correo == "") {
        document.getElementById("mensaje").innerHTML = "Falta llenar: Correo";
        return;
    }
    if (fechaHora == "") {
        document.getElementById("mensaje").innerHTML = "Falta llenar: Fecha y hora";
        return;
    }

    // Checkbox: al menos uno seleccionado
    var cbSeleccionados = "";
    if (document.getElementById("cb1").checked) { cbSeleccionados = cbSeleccionados + "Boda, "; }
    if (document.getElementById("cb2").checked) { cbSeleccionados = cbSeleccionados + "Graduacion, "; }
    if (document.getElementById("cb3").checked) { cbSeleccionados = cbSeleccionados + "XVs, "; }

    if (cbSeleccionados == "") {
        document.getElementById("mensaje").innerHTML = "Falta seleccionar: Tipo de Fiesta";
        return;
    }

    // Quitar la última coma y espacio
    cbSeleccionados = cbSeleccionados.substring(0, cbSeleccionados.length - 2);

    // Radio: uno seleccionado
    var radioValor = "";
    if (document.getElementById("r1").checked) { radioValor = "Hombre"; }
    else if (document.getElementById("r2").checked) { radioValor = "Mujer"; }
    else if (document.getElementById("r3").checked) { radioValor = "Otro"; }

    if (radioValor == "") {
        document.getElementById("mensaje").innerHTML = "Falta seleccionar: Genero";
        return;
    }

    // Insertar nueva fila en la tabla
    var tabla = document.getElementById("tabla");
    var fila = tabla.insertRow(-1);

    var c1 = fila.insertCell(0);
    var c2 = fila.insertCell(1);
    var c3 = fila.insertCell(2);
    var c4 = fila.insertCell(3);
    var c5 = fila.insertCell(4);
    var c6 = fila.insertCell(5);
    var c7 = fila.insertCell(6);

    c1.innerHTML = nombre;
    c2.innerHTML = correo;
    c3.innerHTML = cbSeleccionados;
    c4.innerHTML = radioValor;
    c5.innerHTML = fechaHora;
    c6.innerHTML = color;
    c7.innerHTML = rango;

    // Limpiar campos del formulario
    document.getElementById("nombre").value = "";
    document.getElementById("correo").value = "";
    document.getElementById("fechaHora").value = "";

    document.getElementById("cb1").checked = false;
    document.getElementById("cb2").checked = false;
    document.getElementById("cb3").checked = false;

    document.getElementById("r1").checked = false;
    document.getElementById("r2").checked = false;
    document.getElementById("r3").checked = false;

    document.getElementById("mensaje").innerHTML = "Registro agregado correctamente.";
}
