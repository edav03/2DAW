const button = document.querySelector("#mas");
const tarea = document.querySelector("#tarea");
const lista = document.querySelector("#lista");
let id = 0;

button.onclick = (e) => {
  e.preventDefault();
  if (tarea.value != "") {
    /* Li container the la lista */
    let li = document.createElement("li");
    li.setAttribute("id", id);

    /* Tarea introducida */
    let textTarea = document.createElement("p");
    textTarea.innerText = tarea.value;
    textTarea.setAttribute("id", id);

    /* Boton remove */
    let btnTarea = document.createElement("button");
    btnTarea.innerText = "REMOVE";
    btnTarea.setAttribute("class", "remove");
    btnTarea.setAttribute("id", id);

    /* Se añade al HTML */
    lista.appendChild(li);
    li.append(textTarea, btnTarea);

    /* Reset del input y añadimos al ID */
    tarea.value = "";
    id++;

    /* Poner tarea como primera */
    textTarea.addEventListener("click", () => {
      let thisID = textTarea.id;
      let thisTAREA = document.getElementById(thisID);
      thisTAREA.remove();
      li.prepend(thisTAREA);
      console.log("Has pulsado el texto");
    });

    /* Eliminar tarea */
    btnTarea.onclick = () => {
      let thisID = btnTarea.id;
      let thisLI = document.getElementById(thisID);
      thisLI.remove();
    };
  }
};
