/*const button = document.querySelector('button')
button.disabled = true // esta linea activa o desactiva el boton. Se puede desactivar poniendo false
*/
const userId = document.getElementById("userid");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const btnEnviar = document.getElementById("btnEnviar");

const errorUserID = document.getElementById("errorUserID");
const errorPassLong = document.getElementById("errorPassLong");
const errorPassRepeat = document.getElementById("errorPassRepeat");

var useridOK = false;
var passOK = false;
var passrepeatOK = false;

userId.addEventListener("input", validarUserId);

function validarUserId(){
    if(userId.value >=1 && userId.value <= 99){
        errorUserID.style = "display: none";
        console.log("userid OK");
        useridOK = true;
    }else{
        errorUserID.style = "display: block";
        console.log("userid NOK");
        useridOK = false;
    }
    habilitarBoton();
}

password.addEventListener("input", validarPassword);

function validarPassword(){
    if(password.value.length >= 5){
        errorPassLong.style = "display: none";
        console.log("pass longitud OK");
        passOK = true;
    }else{
        errorPassLong.style = "display: block";
        console.log("pass longitud NOK");
        passOK = false;
    }
    habilitarBoton();
}

confirmPassword.addEventListener("input", validarConfirmPassword);

function validarConfirmPassword(){
    if(confirmPassword.value == password.value){
        errorPassRepeat.style = "display: none";
        console.log("confirmPass OK");
        passrepeatOK = true;
    }else{
        errorPassRepeat.style = "display: block";
        console.log("confirmPass NOK");
        passrepeatOK = false;
    }
    habilitarBoton();
}

function habilitarBoton(){
    if(useridOK && passOK && passrepeatOK){
        btnEnviar.disabled = false;
        console.log("puedes enviar");
    }else{
        btnEnviar.disabled = true;
        console.log("NO puedes enviar");
    }
}