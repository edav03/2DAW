function result(){
    var salary = parseFloat(document.getElementById('salary').value, 10);
    var age = parseFloat(document.getElementById('age').value, 10);

    if (salary < 1000){

        if (age < 30){
            salary = 1100;
            document.write("Salary = " + salary);
        }else if(age >= 30 && age <= 45) {
            salary = salary * 0.03;
            document.write("Salary = " + salary);
        }
    }else if(salary >= 1000 && salary <= 2000){

        if(age > 45){
            salary = salary * 0.03;
            document.write("Salary = " + salary);
        }else{
            salary += salary * 0.1;
            document.write("Salary = " + salary);
        }
    }else{
        document.write("Salary = " + salary);
    }
}