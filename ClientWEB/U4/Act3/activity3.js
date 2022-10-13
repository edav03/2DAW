var after = new Array();
var i = 0;

function RandomNumGenerator(){
    while (after.length < 51) {
        var rand = Math.floor(Math.random() * 50 + 1);
    
        if (after.includes(rand.toString())) {
            RandomNumGenerator();
        }else{
            document.write(rand + " ");
        }

        after.push(rand.toString());
    }
}