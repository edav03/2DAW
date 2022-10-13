var frase = prompt("Escribe algo");
var num = prompt("Introduce un numero");
var k = 0;

for (var i = 0; i < frase.length; i++) {

    if (k < num.length) {
        // document.write(frase[i] + " con num = " + num[k] + "<br>");
        newCode(frase[i], num[k]);
        k++;
    }else{
        k = 0;
    }
        
}
        
// Function for getting the next Character
function newCode(letter, num) {
    var newLetter = parseInt(letter.charCodeAt(0)) + parseInt(num);

    var letra = String.fromCharCode(newLetter);

    document.write(letter + " + " + num + " = " + letra + "<br>");
}