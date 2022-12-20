let contenido = document.getElementsByClassName("contenido")[0];
let banner = document.getElementsByTagName("button")[0];
let bannerAbrir = document.getElementsByTagName("button")[1];

contenido.style.width = "50%";

banner.style.display = "none";
banner.style.height = "150px";
banner.style.width = "300px";

bannerAbrir.style.display = "none";
bannerAbrir.style.height = "150px";
bannerAbrir.style.width = "300px";

window.onscroll = (ev) => {
  if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
    banner.style.display = "inline-block";
  }
};

banner.addEventListener("click", () => {
  contenido.style.display = "none";
  bannerAbrir.style.display = "inline-block";
});

bannerAbrir.addEventListener("click", () => {
  contenido.style.display = "inline";
  bannerAbrir.style.display = "none";
});
