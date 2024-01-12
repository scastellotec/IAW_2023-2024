// Mapeo los elementos que voy a utilizar del HTML

// Producto 1
const suma1 = document.getElementById("suma1");
const cant1 = document.getElementById("cant1");
const resta1 = document.getElementById("resta1");
const valor1 = document.getElementById("valor1");

// Producto 2
const suma2 = document.getElementById("suma2");
const cant2 = document.getElementById("cant2");
const resta2 = document.getElementById("resta2");
const valor2 = document.getElementById("valor2");

// Producto 3
const suma3 = document.getElementById("suma3");
const cant3= document.getElementById("cant3");
const resta3 = document.getElementById("resta3");
const valor3 = document.getElementById("valor3");

// Producto 4
const suma4 = document.getElementById("suma4");
const cant4 = document.getElementById("cant4");
const resta4 = document.getElementById("resta4");
const valor4 = document.getElementById("valor4");

// Todos los subtotales de cada producto
const sub1 = document.getElementById("sub1");
const sub2 = document.getElementById("sub2");
const sub3 = document.getElementById("sub3");
const sub4 = document.getElementById("sub4");

// El total de la suama de todos los elementos
const total = document.getElementById("total");

// Hago una funcion para actualizar los subtotales y el total
function actualizarTotal(){
    // Subtotal producto 1
    let cantidad1 = cant1.value;
    let precio1 = valor1.value;
    let subtotal1 = cantidad1 * precio1;
    sub1.innerHTML = subtotal1;

    // Subtotal producto 1
    let cantidad2 = cant2.value;
    let precio2 = valor2.value;
    let subtotal2 = cantidad2 * precio2;
    sub2.innerHTML = subtotal2;

    // Subtotal producto 3
    let cantidad3 = cant3.value;
    let precio3 = valor3.value;
    let subtotal3 = cantidad3 * precio3;
    sub3.innerHTML = subtotal3;

    // Subtotal producto 4
    let cantidad4 = cant4.value;
    let precio4 = valor4.value;
    let subtotal4 = cantidad4 * precio4;
    sub4.innerHTML = subtotal4;
    
    //Actualizo el total
    let sumaSubs = subtotal1 + subtotal2 + subtotal3 + subtotal4;
    total.innerHTML = sumaSubs;
}

// Funciones para incrementar y decrementar todos los botones
suma1.addEventListener("click", ()=>{
    let cantidadViejo = cant1.value;
    cantidadViejo++;
    cant1.value = cantidadViejo
    actualizarTotal();
});
resta1.addEventListener("click", ()=>{
    let cantidadViejo = cant1.value;
    if (cantidadViejo>0)
        cantidadViejo--;
    cant1.value = cantidadViejo
    actualizarTotal();
});
suma2.addEventListener("click", ()=>{
    let cantidadViejo = cant2.value;
    cantidadViejo++;
    cant2.value = cantidadViejo
    actualizarTotal();
});
resta2.addEventListener("click", ()=>{
    let cantidadViejo = cant2.value;
    if (cantidadViejo>0)
        cantidadViejo--;
    cant2.value = cantidadViejo
    actualizarTotal();
});
suma3.addEventListener("click", ()=>{
    let cantidadViejo = cant3.value;
    cantidadViejo++;
    cant3.value = cantidadViejo
    actualizarTotal();
});
resta3.addEventListener("click", ()=>{
    let cantidadViejo = cant3.value;
    if (cantidadViejo>0)
        cantidadViejo--;
    cant3.value = cantidadViejo
    actualizarTotal();
});
suma4.addEventListener("click", ()=>{
    let cantidadViejo = cant4.value;
    cantidadViejo++;
    cant4.value = cantidadViejo
    actualizarTotal();
});
resta4.addEventListener("click", ()=>{
    let cantidadViejo = cant4.value;
    if (cantidadViejo>0)
        cantidadViejo--;
    cant4.value = cantidadViejo
    actualizarTotal();
});


// Creo un evento para cuando modifiques el campo llame a la funcion de actualiza el total
valor1.addEventListener("input", actualizarTotal);
valor2.addEventListener("input", actualizarTotal);
valor3.addEventListener("input", actualizarTotal);
valor4.addEventListener("input", actualizarTotal);
