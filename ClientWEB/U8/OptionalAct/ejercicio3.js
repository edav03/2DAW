// Alto y ancho de ventana
const width =
  window.innerWidth ||
  document.documentElement.clientWidth ||
  document.body.clientWidth;

const height =
  window.innerHeight ||
  document.documentElement.clientHeight ||
  document.body.clientHeight;

const capa = document.createElement("div");
capa.style.position = "absolute";
capa.style.border = "5px solid black";
capa.style.height = height / 2 + "px";
capa.style.width = width / 2 + "px";
capa.style.left = "25%";
capa.style.top = "25%";

document.body.appendChild(capa);

capa.addEventListener("mouseenter", () => {
  capa.style.backgroundColor = "darkgreen";
});

capa.addEventListener("click", () => {
  capa.style.backgroundColor = "red";
});

capa.addEventListener("contextmenu", () => {
  capa.style.backgroundColor = "darkblue";
});

capa.addEventListener("mouseleave", () => {
  capa.style.backgroundColor = "white";
});
