var saveNum = new Array();
var cont = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var counter = [0,0,0,0,0,0,0,0,0,0];

for (let i = 0; i < 10000; i++) {
    var rand = Math.floor(Math.random() * 10 + 1);

    for(let k = 0; k < cont.length; k++){
        if(rand == cont[k]){
            counter[k] += 1;
        }
    }
}

for (let k = 0; k < counter.length; k++) {
    document.write("Numero "+ (k+1) + " = " + counter[k] + "<br>");
}