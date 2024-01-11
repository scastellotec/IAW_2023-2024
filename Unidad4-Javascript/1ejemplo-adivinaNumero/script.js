// Mapeo los campos que voy a necesitar
const inputUsuario = document.getElementById("guessField");
const inputSubmit = document.getElementById("guessSubmit");
const elementGuesses = document.getElementById("guesses");
const elementLast = document.getElementById("lastResult");
const elementLowHigh = document.getElementById("lowOrHi");

// Inicializo las variables que necesitaré
const numeroAleatorio = Math.floor(Math.random() * 100) + 1;
let numeroIntentos = 0;
const maxIntentos = 4;
console.log("Numero generado: " + numeroAleatorio);

// Cuando haces clic recupero el valor del usuario
inputSubmit.addEventListener("click", ()=>{
    const numUsuario = inputUsuario.value;
    
    // Comparamos con el generado
    if(numUsuario == numeroAleatorio){
        elementLowHigh.innerHTML = "Acertaste!!";
    }else if(numUsuario > numeroAleatorio) {
        elementLowHigh.innerHTML = "Demasiado alto";
    }else{
        elementLowHigh.innerHTML = "Demasiado bajo";
    }

    // Aumento el numero de intentos
    numeroIntentos++;
    elementGuesses.innerHTML = "Llevas "+numeroIntentos+ " intentos de "+maxIntentos;

    // Numeros probados
    elementLast.innerHTML += "  "+numUsuario;

    //Bloqueo si llegamos al limite
    if(numeroIntentos>=maxIntentos){
        inputSubmit.setAttribute("disabled",true);
    }
});






/* Otra forma de haber puesto el evento
function leerDatoUsuario(){
    const numUsuario = inputUsuario.value;
    console.log("El usuario escribe: " + numUsuario);
}

inputSubmit.addEventListener("click",leerDatoUsuario);
*/



