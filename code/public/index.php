<?php

//$array = range(1, 15);
$array = range(55, 70);

$array = [
    [
        'name' => 'Nazar',
        'age' => 666,
    ],
    [
        'name' => 'Andrii',
        'age' => 88,
    ],

];
//
//$array = [
//    getPerson('Nazar', 66),
//    getPerson('Andrii', 77),
//];

$cnt = 0;
foreach ($array as $key => $value) {
    $cnt++;
    var_dump($key);
    var_dump($value);


//    printf("%d) %s: %s<br>", $cnt, $key, $value);
}

function getPerson(string $name, int $age): stdClass {
    $person = new stdClass();
    $person->name = $name;
    $person->age = $age;

    return $person;
}