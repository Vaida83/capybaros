console/log('Welcome to Sets and Maps!');

const array = [];
array.push(10);
array.push(10);
array.push(10);

console.log(array);

const set = new Set();

set.add(10);
set.add(10);
set.add(10);
set.add(7);
//set priima tik originalius, pasikartojanciu neima

console.log(set);

//istrinti is set

set.delete(7);

//pattikrinti ar set yra reiksme (true, false)

console.log(set.has(10));

// koks dydis (ilgis)
console.log(set.size);

//itterator over a set

//for (const item of set) {
 //   console.log(item);
//}
//set.forEach(item => console.log(item));


//convert set to array
const setArray = [...set];
console.log(setArray);

//sort array
setArray.sort((a, b) => a - b);
console.log(setArray);