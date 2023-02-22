let menu = document.getElementById('menu')
let contenedorMenu = document.querySelector('.menu')
let menuOn = false

menu.addEventListener('click', (e) => {
  if (menuOn == true) {
    contenedorMenu.style.display = 'none'
    menuOn = false

    menu.style.rotate = '90deg'
  } else {
    contenedorMenu.style.display = 'flex'
    menuOn = true

    menu.style.rotate = '0deg'
  }
})
