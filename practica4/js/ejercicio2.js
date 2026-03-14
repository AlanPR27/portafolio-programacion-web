function factorial(n) {

    if (n == 0) {
        return 1;
    }
    else {
        return n * factorial(n - 1);
    }
}

function calcularFactorial() {

    var numero = parseInt(document.getElementById("numero").value);
    var mensaje = "";

    if (numero < 0) {
        mensaje = "El factorial no está definido para números negativos.";
    }
    else {
        var resultado = factorial(numero);
        mensaje = "El factorial de " + numero + " es: " + resultado;
    }

    document.getElementById("resultado").innerHTML = mensaje;
}
