// Mapeo en variables los elementos HTML que voy a utilizar
let idUsuario = document.getElementById("user");
let passUsuario = document.getElementById("pass");
let terminosUsuario = document.getElementById("term");
let formularioUsuario = document.getElementById("formulario");

let msgID = document.getElementById("user_msg");
let msgPass = document.getElementById("pass_msg");
let msgTerm = document.getElementById("term_msg");

function validarTerm(){
    // Recuperar si el checkeado o no el checkbox
    let estadoCheckbox = terminosUsuario.checked;
    // Si esta checkeado ponerlo en verde
    // Sino esta checkeado ponerlo en rojo
    if(estadoCheckbox == true){
        msgTerm.style.color="green";
    }else{
        msgTerm.style.color="red";
    }
}

function validarPass(){
    // Recuperar el valor del password del usuario
    let passRecogido = passUsuario.value;
    console.log(passRecogido.length);
    // Comprobar que tiene al menos 5 caracteres de longitud
    if(passRecogido.length>=5){
        msgPass.style.color="green";
    }else{
        msgPass.style.color="red";
    }
}

function validarID(){
    // Recupero el numero que ha escrito el usuario en el campo
    let idRecogido = idUsuario.value;
    
    // Muestro el dato por pantalla
    console.log(idRecogido);
    // Para comprobar el tipo de dato que es (String, int, double, etc.)
    console.log(typeof(idRecogido));
    // Para forzar que lo lea como numero
    idRecogido = parseInt(idRecogido);
    // Vuelvo a mostrar el tipo de dato para comprobar si ha cambiado
    console.log(typeof(idRecogido));
    
    // Luego miro si esta dentro del rango que yo quiero
    if(idRecogido>0 && idRecogido<100){
        console.log("ID correcto");
        // Cambio el estilo del parrafo de la validacion a correcto
        msgID.style.color="green";
    }else{
        console.log("ID incorrecto");
        // Cambio el estilo del parrafo de la validacion a incorrecto
        msgID.style.color="red";
    }
}


idUsuario.addEventListener("change", validarID);
passUsuario.addEventListener("input", validarPass);
terminosUsuario.addEventListener("input", validarTerm);



formularioUsuario.addEventListener("submit", envioForm);
function envioForm(e){
    
    // Comprobar que todos los requisitos se han cumplido
    
    // Evita que el formulario se envie
    e.preventDefault();
}