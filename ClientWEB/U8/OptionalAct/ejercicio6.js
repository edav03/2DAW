/* Asign body styles */
const body = document.getElementsByTagName("body")[0];
body.style.display = "flex";
body.style.flexDirection = "column";
body.style.justifyContent = "center";
body.style.alignItems = "center";

/* Saves width and height from the client page */
width = window.innerWidth;
height = window.innerHeight;

/* Always at the TOP */
window.scrollBy(0, 0);

/* Loading Banner */
let loading = document.createElement("h1");
loading.innerHTML = "LOADING...";
body.appendChild(loading);

/* Loading Banner style */
loading.style.width = `${width}px`;
loading.style.height = `${height}px`;
loading.style.display = "flex";
loading.style.justifyContent = "center";
loading.style.alignItems = "center";

/* Images container */
const imgContainer = document.createElement("div");
imgContainer.style.width = "60%";
imgContainer.style.display = "flex";
imgContainer.style.flexWrap = "wrap";
body.appendChild(imgContainer);

/* 10 random images */
for (let i = 0; i < 24; i++) {
  const images = document.createElement("img");
  images.src = `https://source.unsplash.com/random/${randomSize()}`;
  imgContainer.appendChild(images);
}

function randomSize() {
  return `${randomNumber()}x${randomNumber()}`;
}

function randomNumber() {
  return Math.floor(Math.random() * 10) + 300;
}

let images = document.getElementsByTagName("img");

/* Image styles */
for (let k = 0; k < images.length; k++) {
  images[k].style.width = "300px";
  images[k].style.height = "300px";
  images[k].style.display = "flex";
  images[k].style.justifyContent = "center";
  images[k].style.margin = "10px";
}

/* When pages is loaded, "Loading..." disappears */
body.onload = () => {
  loading.style.display = "none";
};
