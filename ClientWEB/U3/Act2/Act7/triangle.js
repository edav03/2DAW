function numFunction(){
    var x = parseInt(document.getElementById("number").value, 10);
    

    if(isNaN(x) || x < 0){
        document.body.style.display = "none";
        document.write("Valor de x: " + typeof x);
    }else{
        triangleFunc(x);
    }
    
}

function triangleFunc(x){

    for (let i = 1; i <= x; i++) {
        
        for (let j = 0; j < i; j++) {
            document.write("<tt>* </tt>");
        }

        document.write("<br>");
    }
}