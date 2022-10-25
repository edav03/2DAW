var row = 0;
var col = 0;

function createTable(row = 10, col = 4) {
    document.write("<table border = '1px solid'>");

    for (let i = 0; i < row; i++) {
        document.write("<tr>");
        for (let k = 0; k < col; k++) {
            document.write("<th>hola</th>");
        }
        document.write("</tr>");
    }

    document.write("</table>");
}

createTable();