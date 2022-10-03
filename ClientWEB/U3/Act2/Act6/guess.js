var random = Math.floor(Math.random() * 100 + 1);
var guess = 1;

function result(){
    var givenNumber = parseInt(document.getElementById('userNumber').value, 10);

    if(isNaN(givenNumber)){
        alert("Please introduce a number");
    }
    
    if (givenNumber > random) {
        alert("Oh no! Try lower");
        guess++;
    }else if(givenNumber < random){
        alert("Oh no! Try higher!");
        guess++;
    }else{
        alert("Wow! You made it after " + guess + " guesses.");

        var again = prompt("Do you wanna play again? y/n");

        if (again == "y"){
            location.reload();
        }else{
            return
        }
    }
}