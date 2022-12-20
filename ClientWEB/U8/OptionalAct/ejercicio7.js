const draggable = document.getElementById("draggable");
const destiny = document.getElementById("destiny");

draggable.addEventListener("dragstart", () => {
  draggable.style.opacity = 0.5;
});

draggable.addEventListener("dragend", () => {
  draggable.style.opacity = 1;
});

destiny.addEventListener("dragenter", () => {
  destiny.style.backgroundColor = "darkred";
});

destiny.addEventListener("dragover", (e) => {
  e.preventDefault();
});

destiny.addEventListener("drop", () => {
  destiny.innerHTML = "You did it";
  draggable.style.display = "none";
});
