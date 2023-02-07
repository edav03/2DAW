let frase = document.querySelector('.frase')
let intentos = document.getElementById('intentos')
let reiniciar = document.getElementById('reiniciar')

/* Recarga la pagina por lo tanto se reinicia el juego */
reiniciar.addEventListener('click', (e) => {
  location.reload()
})

let numeroPalabras = 3
fetch(`https://puzzle.mead.io/puzzle?wordCount=${numeroPalabras}`)
  .then((response) => {
    return response.json()
  })
  .then((response) => {
    /* Inicializacion del juego */
    let j1 = new juego(response.puzzle)
    j1.puzzleLetters = response.puzzle.toLowerCase().split('')
    console.log(j1)

    /* Intentos posibles (numeros enteros)*/
    let numIntentos = Math.floor(j1.puzzleLetters.length / 2 + 10)
    intentos.textContent = `Intentos Restantes: ${numIntentos}`

    /* Se imprima las lineas segun la longitud de la frase */
    for (let i = 0; i < j1.puzzleLetters.length; i++) {
      let span = document.createElement('span')
      span.innerText = '*'
      frase.appendChild(span)
    }

    window.addEventListener('keypress', (e) => {
      /* En estado JUGANDO */
      if (j1.estado == 'jugando') {
        console.log(e.key)

        /* Comprueba que la letra se encuentra en la frase */
        if (j1.puzzleLetters.indexOf(e.key) != -1) {
          /* Imprime todas las letras */
          while (j1.puzzleLetters.indexOf(e.key) != -1) {
            let indice = j1.puzzleLetters.indexOf(e.key)
            let letra = document.querySelector(`span:nth-child(${indice + 1})`)
            letra.innerText = e.key
            j1.puzzleLetters[indice] = ''
          }
        } else {
          alert(`${e.key.toUpperCase()} no se encuentra en la frase`)
        }

        /* Comprueba que la letra no se haya repetido */
        if (!j1.letrasProbadas.includes(e.key)) {
          j1.letrasProbadas.push(e.key)
          numIntentos--
          intentos.textContent = `Intentos Restantes: ${numIntentos}`
        }

        /* En caso que se acaben los intentos */
        if (numIntentos == 0) {
          j1.estado = 'fallo'
        }

        /* En caso de completar la frase */
        if (j1.puzzleLetters.join('') == '') {
          j1.estado = 'terminado'
        }
      }

      /* En estado FALLO */
      if (j1.estado == 'fallo') {
        alert('Buen intento la frase era: ' + j1.fraseCompleta)
      }

      /* En estado TERMINADO */
      if (j1.estado == 'terminado') {
        alert('ENHORABUENA! Has completado el puzzle')
      }
    })
  })

function juego(fraseCompleta) {
  this.estado = 'jugando'
  this.fraseCompleta = fraseCompleta
  this.puzzleLetters = []
  this.letrasProbadas = []
}
