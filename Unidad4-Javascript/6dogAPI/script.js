const joke = document.getElementById("joke");
const botonNewJoke = document.getElementById("newJoke");
botonNewJoke.addEventListener("click", nuevoChiste);

function nuevoChiste(){
    // Llamo a la API
    fetch('https://api.chucknorris.io/jokes/random')
    .then(function(response) {
        // Obtengo la respuesta y la formateo como JSON
        return response.json();
    })
    .then(function(json) {
        // Hago lo que quiero con la respuesta de tipo JSON
        joke.innerHTML = json.value;
    });
}