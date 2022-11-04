var word = prompt("Write a word or leave it empty");
var arrayWords = [];
var i = 0;

while (word != null && word != "") {
    arrayWords[i] = word;
    word = prompt("Write a word or leave it empty");
    i++;
}

recArray(arrayWords);

function recArray(array) {
    const mapWords = array.map();
    mapWords.forEach(element => {
        document.write(element);
    });
}