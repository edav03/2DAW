const express = require('express')

let router = express.Router()

router.get('/', (req, res) => {
  res.render('../views/index.html')
})

module.exports = router
