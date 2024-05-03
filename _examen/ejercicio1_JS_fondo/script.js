
const resultado = document.getElementById("resultado");
const botones = document.getElementById("botones");

botones.addEventListener("click", cambiarColor);

function cambiarColor(evt){
    console.log(evt.target.id)
    const color = evt.target.id;
    //resultado.style = "background-color: blue";
    resultado.setAttribute("style", "background-color: "+color);
}
