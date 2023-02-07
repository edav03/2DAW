// api key : 82005d27a116c2880c8f0fcb866998a0

/* Inicializacion de Variables */
let apiKey = '82005d27a116c2880c8f0fcb866998a0'
let lat
let long
let imagen = document.querySelector('img')
let temperatura = document.querySelector('.temperature-value')
let tempDescripcion = document.querySelector('.temperature-description')
let ciudad = document.querySelector('.location')

/* Obtener la localizacion del Usuario */
navigator.geolocation.getCurrentPosition((pos) => {
  /* Obtenemos Latitud y Longitud */
  lat = pos.coords.latitude
  lon = pos.coords.longitude

  /* Llamada a la API */
  fetch(
    `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}`
  )
    .then((response) => {
      return response.json()
    })
    .then((response) => {
      console.log(response)
      /* Variables de temperatura */
      let whichTemp = true
      let grados = parseInt(response.main.temp - 273.15)
      let fahrenheit = grados * 1.8 + 32

      /* Imagen del tiempo */
      imagen.src = `icons/${response.weather[0].icon}.png`

      /* Temperatura */
      temperatura.childNodes[1].innerHTML = `${grados} º<span>C</span>`

      /* Descripcion del cielo */
      tempDescripcion.childNodes[1].innerHTML = `${response.weather[0].description}`

      /* Ciudad y pais */
      ciudad.childNodes[1].innerHTML = `${response.name}, ${response.sys.country}`

      /* Al pulsar la temperatura cambiara a Grados o a Fahrenheit */
      temperatura.addEventListener('click', (e) => {
        e.preventDefault()
        if (whichTemp == true) {
          temperatura.childNodes[1].innerHTML = `${fahrenheit} <span>F</span>`
          whichTemp = false
        } else {
          temperatura.childNodes[1].innerHTML = `${grados} º<span>C</span>`
          whichTemp = true
        }
      })
    })
    .catch((error) => {
      console.log('Ha habido un error coleccionando los datos')
    })
})
