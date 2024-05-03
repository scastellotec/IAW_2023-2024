// Es el mismo archivo, pero os lo doy parseado para no tener que poner XAMPP en el examen
var data = JSON.parse('{ "posts": [{"id": 1,"title": "Mi primer post","content": "Este es el contenido de mi primer post en WordPress","author": "Juan Perez","comments": [{"id": 101,"author": "María Rodriguez","comment": "¡Gran post! ¡Sigue así!"},{"id": 102,"author": "Pedro Gomez","comment": "Interesante, gracias por compartir."}]},{"id": 2,"title": "Segundo post","content": "Aquí va el contenido de mi segundo post","author": "Ana López","comments": [{"id": 103,"author": "Carlos Sanchez","comment": "¡Excelente artículo!"}]}]}')
/*
console.log(data.posts[0].title)
console.log(data.posts[0].content)
console.log(data.posts[0].comments[0].comment)
console.log(data.posts[0].comments[1].comment)
console.log(data.posts[1].title)
console.log(data.posts[1].content)
console.log(data.posts[1].comments[0].comment)
*/
const main = document.getElementById("main")
let i=0;

for (i in data.posts){
    let post = "";
    post = "<article>"
    post += "<h1>"+data.posts[i].title+"</h1>"
    post += "<p>"+data.posts[i].content+"</p>"

    let j=0;
    post += "<ul>"
    for (j in data.posts[i].comments){
        post += "<li>"+data.posts[i].comments[j].comment+"</li>"
    }
    post += "</ul>"
    post += "</article>"
    main.innerHTML += post;
}


data.posts.forEach(element => {
    console.log(element.title);
    console.log(element.content);
    element.comments.forEach(c=>{
        console.log(c.comment)
    })
});