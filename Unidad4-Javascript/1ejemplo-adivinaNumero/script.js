// Mapeo los campos que voy a necesitar
const inputUsuario = document.getElementById("guessField");
const inputSubmit = document.getElementById("guessSubmit");
const elementGuesses = document.getElementById("guesses");
const elementLast = document.getElementById("lastResult");
const elementLowHigh = document.getElementById("lowOrHi");

// Genero y muestro el numero aleatorio
const numeroAleatorio = Math.floor(Math.random() * 100) + 1;
console.log("Numero generado: " + numeroAleatorio);

// Cuando haces clic recupero el valor del usuario
inputSubmit.addEventListener("click", ()=>{
    const numUsuario = inputUsuario.value;
    console.log("El usuario escribe: " + numUsuario);
    
    // Comparamos con el generado
    if(numUsuario == numeroAleatorio){
        elementLowHigh.innerHTML = "Acertaste!!";
    }else{
        elementLowHigh.innerHTML = "Sigue intentandolo";
    }
});






/* Otra forma de haber puesto el evento
function leerDatoUsuario(){
    const numUsuario = inputUsuario.value;
    console.log("El usuario escribe: " + numUsuario);
}

inputSubmit.addEventListener("click",leerDatoUsuario);
*/



