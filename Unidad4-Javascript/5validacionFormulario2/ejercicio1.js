/*const button = document.querySelector('button')
button.disabled = true // esta linea activa o desactiva el boton. Se puede desactivar poniendo false
*/
const userId = document.getElementById("userid");
const password = document.getElementById("userid");
const confirmPassword = document.getElementById("userid");
const btnEnviar = document.getElementById("btnEnviar");

const errorUserID = document.getElementById("errorUserID");
const errorPassLong = document.getElementById("errorPassLong");
const errorPassRepeat = document.getElementById("errorPassRepeat");

userId.addEventListener("input", validarUserId);

function validarUserId(){
    if(userId.value >=1 && userId.value <= 99){
        errorUserID.style = "display: none";
        console.log("userid OK");
    }else{
        errorUserID.style = "display: block";
        console.log("userid NOK");
    }
}