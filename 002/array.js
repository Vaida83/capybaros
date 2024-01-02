console.log('Hello from array castle!');
const colors = [
    'pink',
    'orange',
    'yellow',
    'pink',
    'blue',
    'indigo',
    'pink'
];

colors.forEach((color, index )=> {
    if (color == 'pink'){
        colors[index] = 'black';
    }
});
console.log(colors);

const colors3 = colors.map(color => color == 'pink' ? 'black' : color);
const colors4 = colors.map(color => color == 'pink' ? 'skyblue' : color);

console.log(colors3);
console.log(colors4);

const colors22 = [
    { name: 'pink' },
    { name: 'orange' },
    { name: 'yellow' },
    { name: 'pink' },
    { name: 'blue' },
    { name: 'indigo' },
    { name: 'pink' }
];
const colors24 = colors22.map(color => color.name == 'pink' ? { name: 'black'} : color);
const colors25 = colors22.map(color => color.name == 'pink' ? { name: 'skyblue' } : color);

console.log(colors24);
console.log(colors25);

const colors44 = [
    {name: 'pink', age: 12},
    {name: 'orange', age: 13},
    {name: 'yellow', age: 14},
    {name: 'pink', age: 15},
    {name: 'blue', age: 16},
    {name: 'indigo', age: 17},
    {name: 'pink', age: 18}
];
const colors45 = colors44.map(color => color.name == 'pink' ? { name: 'black', age: color.age } : color);
console.log(colors45);

const colors55 = colors44.map(color => color.name == 'pink' ? { ...color, name: 'black' } : { ...color });
console.log(colors55);

const colors66 = [
    {name: 'pink', age: 12},
    {name: 'orange', age: 13},
    {name: 'yellow', age: 14},
    {name: 'pink', age: 15, tractor: 'John Deere'},
    {name: 'blue', age: 16},
    {name: 'indigo', age: 17},
    {name: 'pink', age: 18}
];
const colors67 = colors66.map (color => ({...color, name: 'black'}));
console.log(colors67);

const cats = [
    {name: 'Tomas', age: 12},
    {name: 'Pukis', age: 13},
    {name: 'Juodis', age: 14},
    {name: 'Margis', age: 15, tractor: 'John Deere'},
    {name: 'Ryzas', age: 16},
    {name: 'Pukis', age: 17},
    {name: 'Pukis', age: 18}
];
const bePukio = cats.filter(cat => cat.name != 'Pukis');
console.log(bePukio);

const cats2 = [
    {name: 'Tomas', age: 12},
    {name: 'Juodis', age: 13},
    {name: 'Juodis', age: 14},
    {name: 'Margis', age: 15, tractor: 'John Deere'},
    {name: 'Ryzas', age: 16},
    {name: 'Pukis', age: 17},
    {name: 'Juodis', age: 18}
];

const noJuodis = cats2
.filter(cat => cat.name != 'Juodis')
.map(cat => ({...cat, age: cat.age + 1}));
console.log(noJuodis);
