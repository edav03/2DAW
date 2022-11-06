const nTerms = prompt('Enter the Fibonacci value: ');

if(nTerms <= 0) {
    console.log('Introduce a POSITIVE number');
}
else {
    for(let i = 0; i <= nTerms; i++) {
        document.write(fibonacci(i) + "<br>");
    }
}

function fibonacci(num) {
    if(num < 2) {
        return num;
    }
    else {
        return fibonacci(num-1) + fibonacci(num - 2);
    }
}