for (let i = 1; i < 1001; i++) {
    let k = isPrime(i);
    if(k){
        document.write(i + ", ");
    }
}

function isPrime(num) {
    var bool = true;

    if(num === 1){
        bool = false;
    }else{

        for (let i = 2; i < num; i++) {
            if(num%i == 0){
                bool = false;
                break;
            }
        }
    }

    return bool;
}