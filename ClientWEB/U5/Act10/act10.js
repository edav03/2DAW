const firstArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
document.write("First Array: " + firstArr + "<br>")

const AboveArr = firstArr.filter(x => x>5);
document.write("Array above 5: " + AboveArr + "<br>");

const Randwords = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];
document.write("Array with random words: " + Randwords + "<br>");

const LengArr = Randwords.filter(Randword => Randword.length > 6);
document.write("Word length above 6: " + LengArr + "<br>");
