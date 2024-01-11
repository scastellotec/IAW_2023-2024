const teclaUno = document.getElementById("uno");
const teclaDos = document.getElementById("dos");
const teclaTres = document.getElementById("tres");

const resultado = document.getElementById("resultado");


function mostrarUno(){
    let valorViejo = resultado.value;
    resultado.value = valorViejo+"1";
    console.log(valorViejo+"1");
}
teclaUno.addEventListener("click",mostrarUno);

function mostrarDos(){
    let valorViejo = resultado.value;
    resultado.value = valorViejo+"2";
    console.log(valorViejo+"2");
}
teclaDos.addEventListener("click",mostrarDos);

teclaTres.addEventListener("click",(e)=>{
    let numero = e.target.attributes.value; 
    console.log(numero);
});