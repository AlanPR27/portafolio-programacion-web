function mostrarDatos() {

    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var edad = document.getElementById("edad").value;
    var fecha = document.getElementById("fecha").value;
    var color = document.getElementById("color").value;

    var genero = "";

    if (document.getElementById("masculino").checked) {
        genero = "Masculino";
    }
    else if (document.getElementById("femenino").checked) {
        genero = "Femenino";
    }
    else if (document.getElementById("otro").checked) {
        genero = "Otro";
    }

    var mensaje = "Nombre: " + nombre +
                  "<br>Correo: " + correo +
                  "<br>Edad: " + edad +
                  "<br>Género: " + genero +
                  "<br>Fecha de nacimiento: " + fecha +
                  "<br>Color favorito: " + color;

    document.getElementById("resultado").innerHTML = mensaje;
}
