function reverseString(frase){
    return frase.split("").reverse().join("");
}

function removeTrash(frase){
    var code;
    for (const i of frase) {
        code = parseInt(i.charCodeAt(0));
        if( !(code > 96 && code < 122)){
            var change = String.fromCharCode(code);
            frase = frase.replace(change, "");
        }
    }
    return frase;
}

var frase = prompt("Introduce un palindromo");
frase = frase.replace(/\s/g, '').toLowerCase();
frase = removeTrash(frase);

var compfrase = reverseString(frase);

if(!frase.localeCompare(compfrase)) document.write("It's a palindrom");
else document.write("It's not a palindrom");