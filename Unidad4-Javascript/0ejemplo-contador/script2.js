// Localizo el elemento HTML con el que interactuo
const botonSuma = document.getElementById("suma");
const contadorElemento = document.getElementById("salida");
let contadorGlobal = contadorElemento.innerHTML;

// Declaro la función que quiero que suceda cuando pulsen el boton
function accionSumar(){
    contadorGlobal++;
    console.log(contadorGlobal);
    contadorElemento.innerHTML = contadorGlobal;
}

// Asocio la acción al botón y especifico el evento que lo desencadena
botonSuma.addEventListener("click",accionSumar);