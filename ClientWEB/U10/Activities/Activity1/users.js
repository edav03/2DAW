async function getUser() {
  let userInfo = await fetch("https://randomuser.me/api/?gender=female")
    .then((response) => response.json())
    .catch((error) => console.log("Error: " + error));

  /* Gets User's profile photo */
  function getUserFoto() {
    let photoUrl = userInfo;

    console.log("Photo URL: " + photoUrl.results[0].picture.large);
    return photoUrl.results[0].picture.large;
  }

  /* Gets User's name */
  function getUserName() {
    let nameUrl = userInfo;

    console.log("Name: " + nameUrl.results[0].name.first);
    return nameUrl.results[0].name.first;
  }

  /* Gets User's last name */
  function getUserLastName() {
    let lastNameUrl = userInfo;

    console.log("Last Name: " + lastNameUrl.results[0].name.last);
    return lastNameUrl.results[0].name.last;
  }

  /* Gets User's email */
  function getUserEmail() {
    let emailUrl = userInfo;

    console.log("Email: " + emailUrl.results[0].email);
    return emailUrl.results[0].email;
  }

  /* Gets User's direction */
  function getUserDirection() {
    let directionUrl = userInfo;

    console.log("Direction: " + directionUrl.results[0].location.street.name);
    return directionUrl.results[0].location.street.name;
  }

  /* Gets User's state */
  function getUserState() {
    let stateUrl = userInfo;

    console.log("State: " + stateUrl.results[0].location.state);
    return stateUrl.results[0].location.state;
  }

  getUserFoto();
  getUserName();
  getUserLastName();
  getUserEmail();
  getUserDirection();
  getUserState();

  const body = document.getElementsByTagName("body")[0];
  let main = document.createElement("div");
  main.innerHTML = `<p>Nombre: ${getUserName}</p>`;
  body.append(main);
}

getUser();
