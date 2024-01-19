const urlApi = "https://jsonplaceholder.typicode.com";
const mainSection = document.getElementById("posts");

// Realizamos la llamada a la API
fetch(urlApi+"/posts") // Esto hace la llamada a la URL
  .then(function(response) {
    return response.json(); // Cuando responde, formateo la respuestas como JSON
  })
  .then(function(json) { // En este bloque hago lo que quiero con el JSON
    for(let i=0; i < json.length; i++){
        // Forma 1 de hacerlo
        let articlePost = document.createElement("article");
        let articleTitulo = document.createElement("h2");
        let articleBody = document.createElement("p");
        articleTitulo.innerHTML = json[i].title;
        articleBody.innerHTML = json[i].body;
        articlePost.appendChild(articleTitulo);
        articlePost.appendChild(articleBody);
        mainSection.appendChild(articlePost);

        
        // Forma 2 de hacerlo
        /*let post =  "<article>"
                    +"<h2>"+json[i].title+"</h2>"
                    +"<p>"+json[i].body+"</p>"
                    +"</article>";
        
        mainSection.innerHTML += post;*/
    }
  });

