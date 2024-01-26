/* Mapeo los elementos que utilizo */
  // El menu desplegable
  const razasMenu = document.getElementById("razas");
  // El area donde cargo las imagenes
  const slideShow = document.getElementById("slideshow");

/* Esta llamada se realiza nada mas cargar la pagina y me devuelve un JSON
    con todas las razas
*/
fetch('https://dog.ceo/api/breeds/list/all')
  .then(function(response) {
      // Recibo y transformo la respuesta a JSON
      return response.json();
  })
  .then(function(json) {
      // Imprimo por consola la respueta
      console.log(json);
      //console.log(json.message); // En esta API la información esta dentro de message

      // Construyo el menu desplegable con todas las razas
      let opciones = "";
      // Busco donde se almacenan las razas
      for(const i of Object.keys(json.message)){
        opciones += "<option value='"+i+"'>"+i+"</option>";
      }
      // Las inserto en el menu desplegable
      razasMenu.innerHTML = opciones;
  });

// Añado un evento que cuando se seleccione una de la razas del menu
razasMenu.addEventListener("click", cargaImagenes); 

/*
Esta función es llamada cuando se selecciona una de las razas
Añadiendo evt indico que quiero recibir información del evento y 
se guardara en una variabla llamada evt
*/
function cargaImagenes (evt){
  // El evento me indica el elemento que ha desatado el evento
  // En el evento.target obtengo el elemento. Al ser un campo de formulario con el value obtengo el valor del elemento
  const nombreRaza = evt.target.value;

  // Hago una llamada a la API para obtener todas las imagenes de esa raza
  fetch('https://dog.ceo/api/breed/'+nombreRaza+'/images')
  .then(function(response) {
      return response.json();
  })
  .then(function(json) {
      console.log(json);
      let imagenes = "";
      for(i=0; i <= json.message.length; i++){
          //console.log(json.message[i]);
          imagenes += "<img src='"+json.message[i]+"' style='width:100px'>";
      }
      slideShow.innerHTML = imagenes;
  });
}
