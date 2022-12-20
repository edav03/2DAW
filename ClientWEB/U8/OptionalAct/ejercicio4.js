const speed = document.createElement("h1");

let speedNum = 0;

speed.innerHTML = "Speed " + speedNum;

document.body.appendChild(speed);

document.body.addEventListener("keydown", (e) => {
  if (e.key == "ArrowUp") {
    if (speedNum < 120) {
      speedNum += 1;
    }
  }

  if (e.key == "ArrowDown") {
    if (speedNum > 0) {
      speedNum -= 1;
    }
  }

  speed.innerHTML = "Speed " + speedNum;
});
