let tableProductos = document.getElementById("table");
let buttonAñadir = document.getElementById("añadir");
buttonAñadir.addEventListener("click", () => {
  let producto = document.getElementById("producto");
  let cantidad = document.getElementById("cantidad");
  let precioUnitario = document.getElementById("precio-unitario");
  //Agarra els valors dels inputs
  if (
    producto.value !== "" &&
    parseInt(cantidad.value) > 0 &&
    parseFloat(precioUnitario.value) > 0
    //Sols accepta funciona el botó si s'introdueix un producte, i un preu i quantitat superiors a 0
  ) {
    //Hi ha un if que l'unica diferencia és que si no hi ha un body el crea i l'altre sense crear-lo
    if (!tableProductos.innerHTML.includes("tbody")) {
      let tbody = document.createElement("tbody");
      tbody.setAttribute("id", "tbody");

      let fila = document.createElement("tr");

      let prodFila = document.createElement("td");
      prodFila.innerText = producto.value + "  (DETALLES)";
      prodFila.addEventListener("click", (event) => {
        detallesProducto(event);
      });
      //Introdueix el producte en la seua celda i afegeix un event que mostrarà un alert amb els detalls del producte

      let cantFila = document.createElement("td");
      cantFila.innerText = parseInt(cantidad.value);

      let precioFila = document.createElement("td");
      precioFila.innerText = parseFloat(precioUnitario.value);

      let precioTotalFila = document.createElement("td");
      precioTotalFila.setAttribute("class", "precioProducto");
      precioTotalFila.innerText = parseFloat(
        parseInt(cantidad.value) * parseFloat(precioUnitario.value)
      );
      //Introdueix la quantitat, el preu del producte i calcula el preu total.
      let accionesFila = document.createElement("td");
      accionesFila.innerText = "(ELIMINAR)";
      accionesFila.addEventListener("click", (event) => {
        eliminarProducto(event);
      });
      //afegeix una celda amb un botó amb un event que elimina la fila amb eixe producte

      tableProductos.appendChild(tbody);
      tbody.appendChild(fila);
      fila.appendChild(prodFila);
      fila.appendChild(cantFila);
      fila.appendChild(precioFila);
      fila.appendChild(precioTotalFila);
      fila.appendChild(accionesFila);
      //Afegeix les celles dins de la fila i la fila dins del body
    } else {
      let tbody = document.getElementById("tbody");
      let fila = document.createElement("tr");

      let prodFila = document.createElement("td");
      prodFila.innerText = producto.value + "  (DETALLES)";
      prodFila.addEventListener("click", (event) => {
        detallesProducto(event);
      });

      let cantFila = document.createElement("td");
      cantFila.innerText = parseInt(cantidad.value);

      let precioFila = document.createElement("td");
      precioFila.innerText = parseFloat(precioUnitario.value);

      let precioTotalFila = document.createElement("td");
      precioTotalFila.setAttribute("class", "precioProducto");
      precioTotalFila.innerText = parseFloat(
        parseInt(cantidad.value) * parseFloat(precioUnitario.value)
      );

      let accionesFila = document.createElement("td");
      accionesFila.innerText = "(ELIMINAR)";
      accionesFila.innerText = "(ELIMINAR)";
      accionesFila.addEventListener("click", (event) => {
        eliminarProducto(event);
      });

      tableProductos.appendChild(tbody);
      tbody.appendChild(fila);
      fila.appendChild(prodFila);
      fila.appendChild(cantFila);
      fila.appendChild(precioFila);
      fila.appendChild(precioTotalFila);
      fila.appendChild(accionesFila);
    }
    let baseImponible = document.getElementById("base-imponible");
    let preciosProductos = document.getElementsByClassName("precioProducto");
    let baseDinero = 0;
    for (let i = 0; i < preciosProductos.length; i++) {
      baseDinero += parseFloat(preciosProductos[i].innerText);
    }
    baseImponible.innerText = baseDinero;
    //Agafa tots els preus totals del tbody i bucleja fins obtenir el total
    let iva = document.getElementById("iva");
    let ivaTotal = parseFloat((baseDinero * 21) / 100);
    iva.innerHTML = ivaTotal;
    //Calcula el iva en valor a la base imponible
    let total = document.getElementById("total");
    total.innerHTML = parseFloat(ivaTotal + baseDinero);
    //Calcula el total
    producto.value = "";
    cantidad.value = "0";
    precioUnitario.value = "0";
    //Reseteig dels imputs
  }
});

function eliminarProducto(event) {
  let fila = event.target.parentElement;
  let tbody = event.target.parentElement.parentElement;
  let subTotal = document.getElementById("base-imponible");
  let newSubTotal = parseFloat(
    parseFloat(subTotal.innerText) - parseFloat(fila.cells[3].innerText)
  );
  let iva = document.getElementById("iva");
  subTotal.innerText = newSubTotal;
  iva.innerText = parseFloat((newSubTotal * 21) / 100);
  let total = document.getElementById("total");
  total.innerHTML = parseFloat(parseFloat(iva.innerText) + newSubTotal);
  tbody.removeChild(fila);
  //Agafa el element pare de la cella i el superior i l'elimina d'ell
  //Agafa els valors de Base Imponible, IVA i el Total,
  //els resta els valors que tenia el producte eliminat.
}
function detallesProducto(event) {
  let fila = event.target.parentElement;
  let producto = fila.cells[0].innerText;
  let cantidad = fila.cells[1].innerText;
  let precioUnitario = fila.cells[2].innerText;
  let precioTotal = fila.cells[3].innerText;
  alert(
    "Detalle de la factura: \nProducto: " +
      producto +
      "\nCantidad: " +
      cantidad +
      "\nPrecio unitario: " +
      precioUnitario +
      "\nPrecio total. " +
      precioTotal +
      "\n"
  );
  //agafa l'element pare de la cella clicada i extrau els valors dins d'ella i els posa dins d'un alert
}
