//Función constructora
function Punto(coordX,coordY){
    this.x=coordX;
    this.y=coordY;
    this.mostrarCoordenadas = () => `(${this.x},${this.y})`;
    this.change = (x2, y2) => {
        this.x = x2;
        this.y = y2;
    };
    this.copy = () => {
        return new Punto(this.x, this.y)
    }
    this.equals = (n) => {
        return this.x == n.x && this.y == n.y;
    }
    this.addition = (p) => new Punto(this.x + p.x, this.y + p.y);

    this.getDistance = that => {
        let a = Math.abs(this.x - that.x);
        let b = Math.abs(this.y - that.y);

        a *= a;
        b *= b;

        let area = Math.sqrt(a, b);
        return area;
    }
}

let a=new Punto(10,20);
let b = a.copy();
console.log(a.equals(b));
console.log(a.mostrarCoordenadas());

a.change(5, 8);
console.log(a.mostrarCoordenadas());