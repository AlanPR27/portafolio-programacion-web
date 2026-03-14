function evaluar() {

    var calificacion = parseFloat(document.getElementById("nota").value);
    var mensaje = "";

    if (calificacion < 0 || calificacion > 10) {
        mensaje = "Error: la calificación debe estar entre 0 y 10.";
    }
    else if (calificacion < 6) {
        mensaje = "Equivalencia: NA";
    }
    else if (calificacion < 7.5) {
        mensaje = "Equivalencia: S";
    }
    else if (calificacion < 9) {
        mensaje = "Equivalencia: B";
    }
    else if (calificacion < 10) {
        mensaje = "Equivalencia: MB";
    }
    else if (calificacion == 10) {
        mensaje = "Equivalencia: LAP";
    }

    document.getElementById("resultado").innerHTML = mensaje;
}
