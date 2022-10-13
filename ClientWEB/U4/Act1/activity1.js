var frase = prompt("Escribe algo").toLowerCase();
var num  = parseInt(prompt("Introduce un numero"));

for (let i = 0; i < frase.length; i++) {
    newCode(frase[i], num);
}

// Function that gets the next Letter
function newCode(letter, num) {
    var newLetter = parseInt(letter.charCodeAt(0));

    // Spaces don't change
    if (newLetter == 32);
    else if (newLetter > 90){ // Case newLetter > z
        newLetter -= 26 + num;
        // newLetter += num;
    }else{
        newLetter += num;
    }
    var letra = String.fromCharCode(newLetter);

    document.write(letra + " - " + newLetter + "<br>");
}