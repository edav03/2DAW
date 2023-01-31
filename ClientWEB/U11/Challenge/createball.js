export function createBall(width, height, ctx) {
  //colores
  this.colores = [
    '#F63400',
    '#EBF600',
    '#53F600',
    '#00F694',
    '#008BF6',
    '#8B00F6',
    '#F600A1',
    '#F6000D',
  ]
  let colorNum = Math.floor(Math.random() * 7)

  // posiciones
  this.x = Math.random() * width
  this.y = Math.random() * height

  // velocidad
  this.vx = Math.random() * 10 + 7
  this.vy = Math.random() * 10 + 7

  // radio
  this.radio = Math.random() * 100 + 10

  //crea y pinta las bolas
  this.pintar = () => {
    //dibuja circulo
    ctx.beginPath()
    ctx.arc(this.x, this.y, this.radio, 0, Math.PI * 2)
    ctx.fillStyle = this.colores[colorNum]
    ctx.fill()
    ctx.closePath()

    // verificamos que no se salga de rango
    if (this.y > height || this.y < 1) {
      this.vy = -this.vy
      this.y += this.vy
    } else {
      this.y += this.vy
    }

    if (this.x > width || this.x < 1) {
      this.vx = -this.vx
      this.x += this.vx
    } else {
      this.x += this.vx
    }
  }
}
