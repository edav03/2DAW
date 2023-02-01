const moment = require('moment')
moment.locale('es')
// moment.locale('en')

const hoy = moment() // miercoles 18º enero 2023
const ayer = hoy.clone().subtract(1, 'days') // martes 17º enero 2023
const manana = moment().add(1, 'days') // jueves 19º enero 2023

const fechaExacta1 = moment('2020-10-21') // miercoles 21 octubre 2020
const fechaExacta2 = moment([2020, 0]) //miercoles 1º enero 2020

const mesDias = moment([2019, 1]).daysInMonth() // 28

const formato = 'dddd do MMMM YYYY'

console.table({
  hoy: hoy.format(formato),
  ayer: ayer.format(formato),
  manana: manana.format(formato),
  fechaExacta1: fechaExacta1.format(formato),
  fechaExacta2: fechaExacta2.format(formato),
  mesDias,
  mayor: hoy < ayer ? true : false, //false
})
