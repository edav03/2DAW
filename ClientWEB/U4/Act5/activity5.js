function dataCheck() {
  var name = document.getElementById("name").value;
  var pass = document.getElementById("password").value;

  if (!nameFunction(name) || !passFunction(pass)) {
    document.write("Introduce proper credentials");
  } else {
    document.write("Credential correct!");
  }
}
function nameFunction(name) {
    for (const iterator of name) {
        var letterCode = parseInt(iterator.charCodeAt(0));
        if (letterCode > 97 && letterCode < 122);
        else if (letterCode > 48 && letterCode < 57);
        else { return false }
    }
    return true;
}

function passFunction(pass){
    var may = 0;
    var min = 0;
    var num = 0;
    var chr = 0;

    for (const i of pass) {
        var letterCod = parseInt(i.charCodeAt(0));

        if (letterCod > 64 && letterCod < 91){
            may = 1;
        }else if (letterCod > 96 && letterCod < 123) {
            min = 1;
        }else if (letterCod > 47 && letterCod < 58){
            num = 1;
        }else{
            chr = 1;
        }
    }

    if(may > 0 && min > 0 && num > 0 && chr > 0){
        return true;
    }else{
        return false;
    }
}