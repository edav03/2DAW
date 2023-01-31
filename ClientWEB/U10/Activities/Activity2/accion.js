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
function rellenaUsuario(capaUsuario, usuario) {
  //TODO
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
main.textContent = 'Esperando usuarios...'
//Petición de los 10 usuarios
fetch('https://randomuser.me/api/?results=10')
//TODO
