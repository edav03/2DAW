export function timer(tiempo) {
  var promesa = new Promise((resolve, reject) => {
    var tmp = setTimeout(() => {
      resolve('Time completed')
      clearTimeout(tmp2)
    }, tiempo)

    var tmp2 = setTimeout(() => {
      reject('Time is not going well')
      clearTimeout(tmp)
    }, tiempo * 2)
  })

  return promesa
}

export async function counts(
  initNum,
  pageElement = 'document.body',
  intervalChange = 1000,
  callback
) {
  while (initNum >= 0) {
    var print = document.createElement(pageElement)
    document.body.append(print)

    console.log(initNum)
    print.append(initNum)

    await timer(intervalChange)

    if (initNum != 0) {
      print.remove()
    }

    initNum--
  }

  if (callback) {
    print.remove()
    var print = document.createElement(pageElement)
    document.body.append(print)

    print.append(callback())
  }
}
