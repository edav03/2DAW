const prompt = require('prompt-sync')({sigint: true});
const personas = require(__dirname + '/personas');
const os = require('os');

let answer = "";
let ARR_Personas = [os.userInfo().username];

console.log("Para salir del programa escribe 0");

while (answer != 0 || answer != '0') {
    console.log("Lista actual de personas: " + ARR_Personas);
    answer = prompt("Quieres añadir o borrar personas (a/b)?");

    (answer == "a")? personas.add(ARR_Personas) : personas.remove(ARR_Personas);
}

console.log("--------------Fin de programa--------------");