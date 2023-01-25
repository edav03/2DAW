let table = document.querySelector("table");
let footTable = document.querySelector("tfoot");
let btnAdd = document.getElementById("add");
let bodyTable = document.createElement("tbody");
let id = 0
table.insertBefore(bodyTable, footTable)

btnAdd.addEventListener("click", (e) => {
    /* Recoge los datos introducidos */
    let product = document.getElementById("producto");
    let amount = document.getElementById("cantidad");
    let unitPrice = document.getElementById("precio-unitario");
    let total = (amount.value * unitPrice.value)

    /* Creacion de la fila para los productos */
    let rowbodyTable = document.createElement("tr");
    rowbodyTable.setAttribute("id", id)
    rowbodyTable.setAttribute("class", id)

    /* Valores */
    let productTable = document.createElement("td");
    productTable.innerText = product.value;
    let btnDetalle = document.createElement("button");
    btnDetalle.setAttribute("id", id)
    btnDetalle.innerText = "(detalle)"
    productTable.append(btnDetalle)
    
    let amountTable = document.createElement("td");
    amountTable.innerText = amount.value;

    let unitTable = document.createElement("td");
    unitTable.innerText = `${unitPrice.value}€`;

    let totalTable = document.createElement("td");
    totalTable.innerText = `${total}€`

    let deleteTable = document.createElement("td");
    let btnDelete = document.createElement("button");
    btnDelete.setAttribute("class", "delete")
    btnDelete.setAttribute("id", id);
    btnDelete.innerText = "(eliminar)";
    deleteTable.append(btnDelete)

    /* Calculo de la base */
    let totalBase = document.getElementById("base-imponible");
    let anteriorBase = parseInt(totalBase.innerText);
    totalBase.innerText = anteriorBase + parseInt(totalTable.innerText);

    /* Calculo del IVA */
    let totalIVA = document.getElementById("iva");
    totalIVA.innerText = (parseInt(totalBase.innerText)*0.21);

    /* Calculo del total de factura */
    let totalFactura = document.getElementById("total");
    totalFactura.innerText = (parseFloat(totalBase.innerText) + parseFloat(totalIVA.innerText))

    /* Insercion de Valores */
    rowbodyTable.append(productTable, amountTable, unitTable, totalTable, deleteTable);
    bodyTable.append(rowbodyTable);

    product.value = "";
    amount.value = 0;
    unitPrice.value = 0;
    id++;

    btnDelete.addEventListener("click", (e) => {
        let deleteRow = document.getElementById(btnDelete.id);
        deleteRow.remove()    
    })

    btnDetalle.addEventListener("click", (e) => {
        let datos = document.getElementsByClassName(btnDetalle.id)

        let datitos = datos[0].outerText.trim();
        console.log(datitos.length)

        let contenido = 
        "Detalle de la factura" +
        "\nproducto: " +
        "\ncantidad: " +
        "\nPrecio Unitario: " +
        "\nPrecio total: " +
        "\nundefined: (eliminar)"
        alert(contenido)
    })

})

