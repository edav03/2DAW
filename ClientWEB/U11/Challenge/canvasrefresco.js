import * as ball from './createball.js'

var canvas = document.getElementById('canvas')
var ctx = canvas.getContext('2d')

// obtenemos las dimensiones del canvas
var width = (canvas.width = window.innerWidth)
var height = (canvas.height = window.innerHeight)

var allBall = []
for (let i = 0; i < 200; i++) {
  allBall.push(new ball.createBall(width, height, ctx))
}

//animar
function animar() {
  // limpia canvas
  ctx.clearRect(0, 0, width, height)

  for (const print of allBall) {
    print.pintar()
  }

  // animamos
  requestAnimationFrame(animar)
}
animar()
