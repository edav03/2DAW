function printTribRec(n)
{
    if (n == 0 || n == 1 || n == 2)
        return 0;
 
    if (n == 3)
        return 1;
    else
        return printTribRec(n - 1) +
            printTribRec(n - 2) +
            printTribRec(n - 3);
}
 
function printTrib(n)
{
    for (let i = 1; i <= n; i++)
        document.write(printTribRec(i) + " ");
}
 
var seq = prompt("Introduce Tribonaccio sequence num");
printTrib(seq);