function reverseString(frase){
    return frase.split("").reverse().join("");
}

function removeTrash(stm){
    let code;

    stm.replace(/\s/g, '').toLowerCase();

    if (stm.includes("?")) {
        stm.replace("?", "");
    }
    if (stm.includes("!")) {
        stm.replace("!", "");
    }
    if (stm.includes(",", "")){
        stm.replace(/,/g, "");
    }

    for (const i of stm) {
        code = parseInt(i.charCodeAt(0));
        if( !(code > 96 && code < 122)){
            let change = String.fromCharCode(code);
            stm = stm.replace(change, "");
        }
    }
    
    return stm;
}

var frase = prompt("Introduce un palindromo");
frase = stm.replace(/\s/g, '').toLowerCase();
frase = removeTrash(stm);

var compfrase = reverseString(frase);

if(!frase.localeCompare(compfrase)) document.write("It's a palindrom");
else document.write("It's not a palindrom");