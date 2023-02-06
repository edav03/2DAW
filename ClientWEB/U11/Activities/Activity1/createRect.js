let actualCount = 10

export function createRect(ctx) {
  this.x = actualCount + 10
  actualCount = this.x

  this.y = 10

  this.pintar = (color) => {
    ctx.fillStyle = color || 'grey'
    ctx.fillRect(this.x, this.y, 5, 50)
  }
}
