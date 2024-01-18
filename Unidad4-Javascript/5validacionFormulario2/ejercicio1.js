// Mapeamos todos los campos y boton que usaremos
const userId = document.getElementById("userid");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const btnEnviar = document.getElementById("btnEnviar");

// Mapeo los errores para mostrarlos u ocultarlos
const errorUserID = document.getElementById("errorUserID");
const errorPassLong = document.getElementById("errorPassLong");
const errorPassRepeat = document.getElementById("errorPassRepeat");

// Estas variables me sirven para determinar si se cumplen todos los requisitos
var useridOK = false;
var passOK = false;
var passrepeatOK = false;

userId.addEventListener("input", validarUserId);

function validarUserId(evt){
    if(userId.value >=1 && userId.value <= 99){
        errorUserID.style = "display: none";
        console.log("userid OK");
        useridOK = true;
    }else{
        errorUserID.style = "display: block";
        console.log("userid NOK");
        useridOK = false;
    }
    habilitarBoton(evt);
}

password.addEventListener("input", validarPassword);

function validarPassword(evt){
    if(password.value.length >= 5){
        errorPassLong.style = "display: none";
        console.log("pass longitud OK");
        passOK = true;
    }else{
        errorPassLong.style = "display: block";
        console.log("pass longitud NOK");
        passOK = false;
    }
    habilitarBoton(evt);
}

confirmPassword.addEventListener("input", validarConfirmPassword);

function validarConfirmPassword(evt){
    if(confirmPassword.value == password.value){
        errorPassRepeat.style = "display: none";
        console.log("confirmPass OK");
        passrepeatOK = true;
    }else{
        errorPassRepeat.style = "display: block";
        console.log("confirmPass NOK");
        passrepeatOK = false;
    }
    habilitarBoton(evt);
}



function habilitarBoton(evt){
    if(useridOK && passOK && passrepeatOK){
        //btnEnviar.disabled = false;

        console.log("puedes enviar");
    }else{
        //btnEnviar.disabled = true;
        evt.preventDefault();
        console.log("NO puedes enviar");
    }
}


const form = document.getElementById("signup");
form.addEventListener("submit", habilitarBoton);