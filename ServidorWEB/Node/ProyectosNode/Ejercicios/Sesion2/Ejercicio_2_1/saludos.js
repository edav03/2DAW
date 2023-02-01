const os = require('os');

try {
    console.log("Bienvenido " + os.userInfo().username);
} catch (err) {
    console.log(": error ocurred " + err);
}