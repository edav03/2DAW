function averageNum(){
var num = parseInt(document.getElementById("num").value, 10);
var cont = 0;

    if(isNaN(num) || num == 0){
        document.write("You've not introduce a proper number");
    }else{
        document.write(
            "<label for='ask'>Introduce un numero:</label>" + 
            "<input type='number' id='num'>" +
            "<button  onclick='averageNum()'>Submit</button>"
        )
    }
}

function counter(num){
    var cont = 0;


}