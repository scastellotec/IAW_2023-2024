const urlApi = "https://jsonplaceholder.typicode.com";
const albums = document.getElementById("albums");
const photos = document.getElementById("photos");

// Realizamos la llamada a la API
fetch(urlApi+"/albums") // Esto hace la llamada a la URL
  .then(function(response) {
    return response.json(); // Cuando responde, formateo la respuestas como JSON
  })
  .then(function(json) { // En este bloque hago lo que quiero con el JSON
    for(let i=0; i < json.length; i++){
      let parrafo = document.createElement("p");
      let enlace = document.createElement("a");
      enlace.innerHTML = json[i].title;
      enlace.setAttribute("id", json[i].id);
      enlace.setAttribute("href", '#');
      enlace.addEventListener("click",showAlbum);
      parrafo.appendChild(enlace);
      albums.appendChild(parrafo);
    }
  });

function showAlbum(evt){
  // Esto me devuelve el ID del elemento donde he pulsado
  console.log(evt.target.id);

  // Construir una URL con el ID del Album
    // Ejemplo: https://jsonplaceholder.typicode.com/albums/1/photos

  // Hacer una llamada a la API para que me de ese album

  // Recorrer el JSON y mostrar el album en la seccino correspondiente.
}