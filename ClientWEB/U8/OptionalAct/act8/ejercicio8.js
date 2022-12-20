let formulario = document.forms[0];

/* Image change when user selects another option */

let tipo = document.getElementById("tipo");
tipo.onchange = () => {
  let imagen = document.querySelector("img");
  let value = tipo.value;

  switch (value) {
    case "distribucion":
      imagen.src = "img/distribucion.jpg";
      break;
    case "oficina":
      imagen.src = "img/oficina.jpg";
      break;
    case "produccion":
      imagen.src = "img/produccion.jpg";
      break;
  }
};

/* Mostrar el textArea */

let btnMostrar = document.querySelector("#mostrarDescripcion");
let comentario = document.querySelector("#fDescripcion");

btnMostrar.onclick = () => {
  btnMostrar.style.display = "none";
  comentario.style.display = "inline";
};
