var cont = 0;
var suma = 0;

do{
    var num = prompt("Introduce un numero: ");
    num = parseInt(num);

    if(num == 0){
        break;
    }else if(isNaN(num)){
        alert("Please introduce a proper number");
    }
    else{
        suma += num;
        cont++;
    }

}while(!(isNaN(num) || num == 0))

document.write("Media = " + suma/cont);