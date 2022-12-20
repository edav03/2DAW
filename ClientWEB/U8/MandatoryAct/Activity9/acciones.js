const button = document.querySelector("#mas");
const tarea = document.querySelector("#tarea");
const lista = document.querySelector("#lista");
let id = 0;

button.onclick = (e) => {
  e.preventDefault();
  if (tarea != "") {
    console.log(tarea.value);

    let newTarea = document.createElement("div");

    let textTarea = document.createElement("p");
    textTarea.innerText = tarea.value;

    lista.appendChild(newTarea);
    newTarea.appendChild(textTarea);

    tarea.value = "";
  }
};
