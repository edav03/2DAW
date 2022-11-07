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
        // if (this.x == n.x && this.y == n.y) {
        //     return true;
        // }else{
        //     return false;
        // }
    }
}

let a=new Punto(10,20);
let b = a.copy();
console.log(a.equals(b));
console.log(a.mostrarCoordenadas());

a.change(5, 8);
console.log(a.mostrarCoordenadas());