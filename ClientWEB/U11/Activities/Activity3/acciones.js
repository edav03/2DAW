const button = document.querySelector('#mas')
const tarea = document.querySelector('#tarea')
const lista = document.querySelector('#lista')
let listaObjeto = []
let listaNombres = []
let id = 0

// if (localStorage) {
//   if (localStorage.getItem('lista') == null) {
//     console.log('Es nulo')
//   } else {
//     listaObjeto = localStorage.getItem('lista')
//     for (const iter of listaObjeto) {
//       // iter.add()
//     }
//   }
// }

/* Al clicar + */
button.onclick = (e) => {
  e.preventDefault()
  for (const iter of listaObjeto) {
    listaNombres.push(iter.tareaNombre)
  }

  if (tarea.value != '' && !listaNombres.includes(tarea.value)) {
    /* Eliminamos todas las tareas */
    let all = document.querySelectorAll('li')
    for (const iter of all) {
      iter.remove()
    }

    /* Se añade la tarea al array de tareas */
    listaObjeto.push(new concretaTarea(tarea.value, id))

    /* Ordenando las tareas alfabeticamente */
    listaObjeto.sort((a, b) => {
      let textA = a.tareaNombre.toLowerCase()
      let textB = b.tareaNombre.toLowerCase()
      return textA < textB ? -1 : textA > textB ? 1 : 0
    })

    /* Imprimir tareas */
    for (const iter of listaObjeto) {
      iter.add()
    }
  } else {
    alert('No valido!')
  }

  // localStorage.setItem('lista', listaObjeto)
}

/* Objeto Tarea */
class concretaTarea {
  constructor(tareaValor, id) {
    this.id = id

    this.tareaNombre = tareaValor

    this.add = () => {
      /* Li container the la lista */
      let li = document.createElement('li')
      li.setAttribute('id', id)

      /* Tarea introducida */
      let textTarea = document.createElement('p')
      textTarea.innerText = this.tareaNombre
      textTarea.setAttribute('id', id)

      /* Boton remove */
      let btnTarea = document.createElement('button')
      btnTarea.innerText = 'REMOVE'
      btnTarea.setAttribute('class', 'remove')
      btnTarea.setAttribute('id', id)

      /* Se añade al HTML */
      lista.appendChild(li)
      li.append(textTarea, btnTarea)

      /* Eliminar tarea */
      btnTarea.onclick = () => {
        let thisID = btnTarea.id
        let thisLI = document.getElementById(thisID)
        thisLI.remove()

        for (let i = 0; i < listaObjeto.length; i++) {
          if (this.tareaNombre == listaObjeto[i].tareaNombre) {
            delete listaObjeto[i]
          }
        }
      }

      /* Reset del input y añadimos al ID */
      tarea.value = ''
      id++
    }
  }
}
