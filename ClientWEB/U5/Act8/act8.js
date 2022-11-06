function anagrams(stringA, stringB) {
    return cleanString(stringA) === cleanString(stringB);
}

function cleanString(str) {
    return str.replace(/[^\w]/g).toLowerCase().split('').sort().join()
}   

var FrAng = prompt("Write the first word");
var SecAng = prompt ("Write the second word");
if(anagrams(FrAng, SecAng)){
    alert("They're are anagrams");
}else{
    alert("They're not anagrams");
}