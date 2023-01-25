let intro = document.getElementById("mas");
let lista = document.getElementById("lista");

intro.addEventListener("click", (e) => {
    e.preventDefault();

    /* Añadir tarea */
    let userInput = document.getElementById("tarea");
    let tarea = document.createElement("li");
    tarea.style.display = "inline-block"
    tarea.id = "1"
    tarea.innerHTML = `${userInput.value}`

    /* Boton de borrar */
    let btnDelete = document.createElement("button")
    btnDelete.innerText = "DELETE"
    btnDelete.style.display = "inline-block"

    lista.append(tarea, btnDelete)

    userInput.value = " "
})