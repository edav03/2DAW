var arr = new Array(20);

for (let i = 0; i < 20; i++) {
    var rand = Math.floor((Math.random() * 50) + 1);
    arr[i] = rand;
}

for (let k = 0; k < arr.length; k++) {
    document.write("Array[" + k + "] = " + arr[k] + "<br>");
    for (let n = 0; n < arr[k]; n++) {
        document.write("* ");
    }
    document.write("<br>");
}