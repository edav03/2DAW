function timer(tiempo) {
  var promesa = new Promise((resolve, reject) => {
    var tmp = setTimeout(() => {
      resolve('Time completed')
      clearTimeout(tmp2)
    }, tiempo)

    var tmp2 = setTimeout(() => {
      reject('Time is not going well')
      clearTimeout(tmp)
    }, tiempo * 2)
  })

  return promesa
}

timer(3000)
  .then((respuesta) => document.write(`<h1>${respuesta}</h1>`))
  .catch((respuesta) => document.write(`<h1>${respuesta}</h1>`))
