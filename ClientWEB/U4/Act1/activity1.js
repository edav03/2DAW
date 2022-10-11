var frase = prompt("Escribe algo").toLowerCase();
var num  = parseInt(prompt("Introduce un numero"));

for (let i = 0; i < frase.length; i++) {
    newCode(frase[i], num);
}

// Function that gets the next Letter
function newCode(letter, num) {
    var newLetter = parseInt(letter.charCodeAt(0));

    // Spaces don't change
    if (newLetter == 32) {
        newLetter = 32;
    }else if (newLetter == 90 || newLetter == 122){ // Case newLetter is Z or z
        newLetter -= 26;
        newLetter += num;
    }else{
        newLetter += num;
    }
    var letra = String.fromCharCode(newLetter);

    document.write(letra + " - " + newLetter + "<br>");
}

// if(newLetter+num > 90 && newLetter+num < 97){
//      y + 5 = d
//      y -> z = 1
//      cont -= 1
//      newLetter = 25;
//      newLetter += cont;

// else if (newLetter == 90 || newLetter == 122){ // Case newLetter is Z or z
//     newLetter -= 26;
//     newLetter += num;