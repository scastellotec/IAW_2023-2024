const teclaUno = document.getElementById("1");
const teclaDos = document.getElementById("2");
const teclaTres = document.getElementById("3");
const calculadora = document.getElementById("calculadora");
const resultado = document.getElementById("resultado");

function mostrarNumero(evt){  
    let numeroPulsado = evt.target.id;
    let valorViejo = resultado.value;
    resultado.value = valorViejo+numeroPulsado;
}

calculadora.addEventListener("click",mostrarNumero);