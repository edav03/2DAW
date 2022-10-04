
function facFunc(){
    var x = parseInt(document.getElementById("num").value, 10);
    var result = 1;

    if (x == 0 || x == 1 ) {
        document.write(x + "! = " + x);
    } else {
        for (let i = x; i >= 1; i--) {
            result *= i;
        }
        
        document.write(x + "! = " + result);
    }
}