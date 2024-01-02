<?php

$farm = [
    [
        'name' => 'Cow',
        'sound' => 'Moo',
        'price' => 1000,
        'weight' => [300, 400, 500],
    ],
    [
        'name' => 'Pig',
        'sound' => 'Oink',
        'price' => 500,
        'weight' => [100, 150, 200],

    ],
    [
        'name' => 'Chicken',
        'sound' => 'Cluck',
        'price' => 250,
        'weight' => [1, 2, 3],

    ],
    [
        'name' => 'Horse',
        'sound' => 'Neigh',
        'price' => 5000,
        'weight' => [800, 900, 1000],

    ],
    [
        'name' => 'Sheep',
        'sound' => 'Baa',
        'price' => 750,
        'weight' => [200, 300, 400],

    ],
];

$persons = [
    [
        'name' => 'Paul',
        'wife' => 'Jane',
    ],
    [
        'name' => 'Peter',
        'wife' => 'Mary',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Sue',
    ],
    [
        'name' => 'Mark',
        'wife' => 'Kate',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Anne',
    ],
];

// sort by name and wife

usort($persons, function($a, $b) {
    if ($a['name'] == $b['name']) {
        return $a['wife'] <=> $b['wife'];
    }
    return $a['name'] <=> $b['name'];
});


echo '<pre>';
print_r($farm);

function sortBySound($a, $b) {
    return $a['sound'] <=> $b['sound'];
}

$sortByName = function($a, $b) {
    return $a['name'] <=> $b['name'];
};

usort($farm, fn($a, $b) => $a['price'] <=> $b['price']); //inline
usort($farm, $sortByName); //anonimine, seno tipo
usort($farm, 'sortBySound'); //vardine, siuolaikine

// sort by second weight

usort($farm, function($a, $b) {
    return $a['weight'][1] <=> $b['weight'][1];
});

print_r($farm);
print_r($persons);



