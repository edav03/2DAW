async function getUser() {
  let userInfo = await fetch('https://randomuser.me/api/?gender=female')
    .then((response) => response.json())
    .catch((error) => console.log('Error: ' + error))

  // console.log(userInfo.results[0])
  return userInfo
}

/* Gets User's profile photo */
async function getUserFoto(user) {
  let photoUrl = await user

  console.log('Photo URL: ' + photoUrl.results[0].picture.large)
  return photoUrl.results[0].picture.large
}

/* Gets User's name */
async function getUserName(user) {
  let nameUrl = await user

  console.log('Name: ' + nameUrl.results[0].name.first)
  return nameUrl.results[0].name.first
}

/* Gets User's last name */
async function getUserLastName(user) {
  let lastNameUrl = await user

  console.log('Last Name: ' + lastNameUrl.results[0].name.last)
  return lastNameUrl.results[0].name.last
}

/* Gets User's email */
async function getUserEmail(user) {
  let emailUrl = await user

  console.log('Email: ' + emailUrl.results[0].email)
  return emailUrl.results[0].email
}

/* Gets User's direction */
async function getUserDirection(user) {
  let directionUrl = await user

  console.log('Direction: ' + directionUrl.results[0].location.street.name)
  return directionUrl.results[0].location.street.name
}

/* Gets User's state */
async function getUserState(user) {
  let stateUrl = await user

  console.log('State: ' + stateUrl.results[0].location.state)
  return stateUrl.results[0].location.state
}

getUserFoto(getUser())
getUserName(getUser())
getUserLastName(getUser())
getUserEmail(getUser())
getUserDirection(getUser())
getUserState(getUser())
// getUser()
