const map1 = new Map().set(1, "Optimal").set(2, "Noteworthy").set(3, "Alcocer").set(4, "Excellent").set(5, "Improvable").set(6, "Excellent").set(7, "Banuls");

const Arrmap2 = map1.values();

map1.invertMap = function() {
    let x;
    let y;
    const map2 = new Map();
    const ArrMap = [];

    for (const [key, value] of map1) {
        ArrMap.push(value);
    }

    for (const [key, value] of map1) {
        k = key;
        v = value;
        if (ArrMap.includes(value)) {

        }
    }

    return map2;
}

const map2 = map1.invertMap();

for (const [key, value] of map2) {
    console.log(key + " - " + value);
}