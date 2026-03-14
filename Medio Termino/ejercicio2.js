var timer = null;

function habilitarBoton() {
  var fecha = document.getElementById("fechaObjetivo").value;

  if (fecha == "") {
    document.getElementById("btnIniciar").disabled = true;
  } else {
    document.getElementById("btnIniciar").disabled = false;
  }
}

function dosDigitos(n) {
  if (n < 10) { return "0" + n; }
  return "" + n;
}

function iniciarCountdown() {
  var valor = document.getElementById("fechaObjetivo").value;

  if (valor == "") {
    document.getElementById("msg").innerHTML = "Primero ingresa una fecha.";
    return;
  }

  var fechaObjetivo = new Date(valor);

  if (timer != null) {
    clearInterval(timer);
    timer = null;
  }

  timer = setInterval(function () {
    actualizar(fechaObjetivo);
  }, 1000);

  actualizar(fechaObjetivo);
}

function detenerCountdown() {
  if (timer != null) {
    clearInterval(timer);
    timer = null;
    document.getElementById("msg").innerHTML = "Contador detenido.";
  }
}

function actualizar(fechaObjetivo) {
  var ahora = new Date();
  var diferencia = fechaObjetivo - ahora;

  if (diferencia <= 0) {
    document.getElementById("dias").innerHTML = "00";
    document.getElementById("horas").innerHTML = "00";
    document.getElementById("minutos").innerHTML = "00";
    document.getElementById("segundos").innerHTML = "00";
    document.getElementById("msg").innerHTML = "¡Llegó el momento! 🎉";

    clearInterval(timer);
    timer = null;
    return;
  }

  var totalSeg = Math.floor(diferencia / 1000);

  var dias = Math.floor(totalSeg / (60 * 60 * 24));
  var resto = totalSeg % (60 * 60 * 24);

  var horas = Math.floor(resto / (60 * 60));
  resto = resto % (60 * 60);

  var minutos = Math.floor(resto / 60);
  var segundos = resto % 60;

  document.getElementById("dias").innerHTML = dosDigitos(dias);
  document.getElementById("horas").innerHTML = dosDigitos(horas);
  document.getElementById("minutos").innerHTML = dosDigitos(minutos);
  document.getElementById("segundos").innerHTML = dosDigitos(segundos);

  if (diferencia <= 60000) {
    document.getElementById("msg").innerHTML = "¡Ya falta muy poco!";
  } else {
    document.getElementById("msg").innerHTML = "";
  }
}