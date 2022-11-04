const setWords=new Set();
var arrayWords=[];

//Asks the user for a word, this word is added to the Set called setWords
var word=prompt("Write a word ,or leave it empty if you want to finish");
while(word !=null && word!=""){
setWords.add(word);
word=prompt("Write a word ,or leave it empty if you want to finish");
}

//arrayWords saves the setWords words
arrayWords=[...setWords];

//arrayWords is sorted by lowest to major content
arrayWords.sort((a,b)=>(-a.localeCompare(b,"es")));

//forEach method iterates the array saving each value on 'w'
arrayWords.forEach(function(w){
document.write(`<p>${w}</p>`);
})