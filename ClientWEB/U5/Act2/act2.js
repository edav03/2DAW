var row = 0;
var col = 0;
var color = 'black';

function createTable(row = 10, col = 4, color = 'black') {
    document.write("<table border ='1px' bordercolor='" + color + "' width=100%>");

    for (let i = 0; i < row; i++) {
        document.write("<tr>");
        for (let k = 0; k < col; k++) {
            document.write("<th>hola</th>");
        }
        document.write("</tr>");
    }

    document.write("</table>");
}

createTable(20, 10, 'green');