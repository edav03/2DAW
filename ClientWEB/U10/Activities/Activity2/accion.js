/**
 * RetornA un texto con la primera letra en mayúscula
 * @param {string} texto
 */
function primeraMayus(texto) {
  return texto[0].toUpperCase() + texto.slice(1).toLowerCase()
}

/**
 * Función que formnatea los datos del usuario aleatorio
 * en un elemento div
 * @param {Element} capaUsuario Elemento div en el
 * que se graba el usuario
 * @param {JSON} usuario El usuario que
 * contiene los datos obtenidos de randomuser.me
 */
function rellenaUsuario(response, capaUsuario, usuario) {
  //TODO
  for (let i = 0; i < 10; i++) {
    console.log(response)
    /** Creacion del contenedor */
    let tarjeta = document.createElement('div')
    tarjeta.setAttribute('class', i + 1)

    /** Distincion entre pares e impares */
    if ((i + 1) % 2 == 0) {
      tarjeta.style.backgroundColor = 'yellow'
    } else {
      tarjeta.style.backgroundColor = 'darkgreen'
    }
    main.append(tarjeta)

    /** Imagen */
    let imagen = document.createElement('img')
    imagen.src = response.results[i].picture.large
    tarjeta.appendChild(imagen)

    /** Nombre */
    let name = document.createElement('p')
    name.innerHTML = `${response.results[i].name.first} ${response.results[0].name.last}`
    tarjeta.appendChild(name)

    /** Email */
    let email = document.createElement('p')
    email.innerHTML = `${response.results[i].email}`
    tarjeta.appendChild(email)

    /** Direccion */
    let direc = document.createElement('p')
    direc.innerHTML = `Direccion: ${response.results[i].location.street.name}`
    tarjeta.appendChild(direc)

    /** Estado */
    let estado = document.createElement('p')
    estado.innerHTML = `Estado: ${response.results[i].location.state}`
    tarjeta.appendChild(estado)

    let btn = document.createElement('button')
    btn.textContent = 'Cambiar'
    tarjeta.appendChild(btn)

    btn.addEventListener('click', (e) => {
      console.log(tarjeta.className)
      let thisTarjeta = document.getElementsByClassName(tarjeta.className)[0]
      fetch('https://randomuser.me/api/')
        .then((response) => {
          if (response.ok) {
            return response.json()
          } else {
            throw new Error('Los datos no han llegado correctamente')
          }
        })
        .then((response) => {
          thisTarjeta.childNodes[0].src = response.results[0].picture.large
          thisTarjeta.childNodes[1].textContent = `${response.results[0].name.first} ${response.results[0].name.last}`
          thisTarjeta.childNodes[2].textContent = `${response.results[0].email}`
          thisTarjeta.childNodes[3].textContent = `Direccion: ${response.results[0].location.street.name}`
          thisTarjeta.childNodes[4].textContent = `Estado: ${response.results[0].location.state}`
          // console.log(thisTarjeta.nodeValue)
        })
    })
  }
}

/**
 * Captura el clic de botón en una capa de usuario
 * @param {Element} capaUsuario Elemento div que contiene
 * los datos a cambiar del usuario
 */
function generarEventoBoton(capaUsuario) {
  //TODO
}

/**
 * Zona principal del código
 */
var main = document.querySelector('main')
main.textContent = 'CARGANDO...'
//Petición de los 10 usuarios
fetch('https://randomuser.me/api/?results=10')
  .then((response) => {
    if (response.ok) {
      main.textContent = ''
      return response.json()
    } else {
      throw new Error('Los datos no han llegado correctamente')
    }
  })
  .then((response) => {
    rellenaUsuario(response)
  })
  .catch((error) => {
    console.log('Error: ' + error)
  })
//TODO
