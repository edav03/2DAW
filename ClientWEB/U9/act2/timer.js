export function timer(tiempo) {
  var promesa = new Promise((resolve, reject) => {
    var tmp = setTimeout(() => {
      resolve('Time completed')
      clearTimeout(tmp)
    }, tiempo)

    var tmp2 = setTimeout(() => {
      reject('Time is not going well')
    }, tiempo * 2)
  })

  return promesa
}

export function counts(initNum, pageElement = 'body', intervalChange = 1000) {
  const firstBodyElement = document.getElementsByTagName(pageElement)[0]
  var singleNum = document.createElement('h1')
  singleNum.innerHTML = initNum
  singleNum.id = 'singleNum'
  firstBodyElement.append(singleNum)

  console.log(initNum)

  var firstPrint = setInterval(() => {
    let hello = document.getElementById('singleNum')
    hello.remove()

    if (initNum > 10) {
      initNum -= 10
    } else {
      initNum--
    }

    let singleNum = document.createElement('h1')
    singleNum.innerHTML = initNum
    singleNum.id = 'singleNum'

    firstBodyElement.append(singleNum)
    console.log(initNum)

    if (initNum < 1) {
      clearInterval(firstPrint)
    }
  }, intervalChange)
}
