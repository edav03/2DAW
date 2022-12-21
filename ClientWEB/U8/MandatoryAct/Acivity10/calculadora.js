const suma = document.getElementById("mas");
const resta = document.getElementById("menos");
const mult = document.getElementById("por");
const division = document.getElementById("entre");
const reset = document.getElementById("ce");
let resultado = document.getElementById("resultado");

function getValue1() {
  return parseInt(document.getElementById("numero1").value);
}

function getValue2() {
  return parseInt(document.getElementById("numero2").value);
}

suma.onclick = () => {
  let valor1 = getValue1();
  let valor2 = getValue2();

  resultado.value = valor1 + valor2;
};

resta.onclick = () => {
  let valor1 = getValue1();
  let valor2 = getValue2();

  resultado.value = valor1 - valor2;
};

mult.onclick = () => {
  let valor1 = getValue1();
  let valor2 = getValue2();

  resultado.value = valor1 * valor2;
};

division.onclick = () => {
  let valor1 = getValue1();
  let valor2 = getValue2();

  resultado.value = valor1 / valor2;
};

reset.onclick = () => {
  document.getElementById("numero1").reset();
  document.getElementById("numero2").reset();
};
