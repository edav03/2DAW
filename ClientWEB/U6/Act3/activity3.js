// Creation Map
const map1 = new Map([[1, "Optimal"], [2, "Noteworthy"], [3, "Alcocer"], [4, "Excellent"], [5, "Improvable"], [6, "Excellent"], [7, "Banuls"]]);

map1.invertMap = function() { // Function to invert the map values <--> keys
    const ArrMap = new Map(Array.from(map1, a => a.reverse()));

    return ArrMap;
}

const map2 = map1.invertMap(); // Testing the invertMap function

for (const [key, value] of map2) {
    console.log(`Clave: ${key} || Valor ${value}`)
}