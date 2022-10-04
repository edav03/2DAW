function NumberFunc(){
    var x = document.getElementById("number").value;

    if(isNaN(x)){
        document.write(x + " is not a number");
    }else{
        document.write(x + " is a number");
    }
}