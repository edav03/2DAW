const prompt = require('prompt-sync')({sigint: true});

let addPeople = (people) => {
    const name = prompt('Introduce un nombre: ');
    people.push(name);
    console.log(people);
}

let removePeople = (people) => {
    people.pop();
    console.log(people);
}

module.exports = {
    add: addPeople,
    remove: removePeople
}