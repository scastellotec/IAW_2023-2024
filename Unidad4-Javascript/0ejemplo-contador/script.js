// Localizo el elemento HTML con el que interactuo
const botonSuma = document.getElementById("suma");
const contadorElemento = document.getElementById("salida");
const botonResta = document.getElementById("resta");
let contadorGlobal = contadorElemento.innerHTML;

// Declaro la función que quiero que suceda cuando pulsen el boton
// Asocio la acción al botón y especifico el evento que lo desencadena
botonSuma.addEventListener("click", () => {
    if(contadorGlobal < 10){
        contadorGlobal++;
    }
    contadorElemento.innerHTML = contadorGlobal;
});

botonResta.addEventListener("click", () => {
    if(contadorGlobal > 0){
        contadorGlobal--;
    }
    contadorElemento.innerHTML = contadorGlobal;
});