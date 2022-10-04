function askFunction(){
    var n = parseInt(document.getElementById("num").value, 10);

    document.write("-Triangle 1: <br>");
    triangle1(n);

    document.write("-Triangle 2: <br>");
    triangle2(n);

    document.write("-Triangle 3: <br>");
    triangle3(n);
    
}

function triangle1(n){

    for (let i = 0; i <= n; i++) {

      for (let j = n - 1; j >= i; j--) {
        document.write('<tt>* </tt>');
      }

      document.write('<br>');
    }
}

function triangle2(n){

    for (let i = 0; i < n; i++) {

        for (let j = 0; j < n - i; j++){ 
            document.write("&nbsp");
        }
        for (let k = 0; k <= i; k++){
            document.write("<tt>* </tt>");
        }
        document.write("<br>");  
    }
}

function triangle3(n){

    for (let i = 1; i <= n; i++) {

        for (let k = 0; k < i; k++) {
            document.write("&nbsp");
        }
        for (let j = 0; j < n - i + 1; j++) {
          document.write("<tt>* </tt>");
        }
      

      document.write("<br>");
    }
}