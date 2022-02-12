<?php

//Union

$first = [
    "first_name" => "Rizki"
];

$last = [
    "last_name" => "Ramadhan"
];

var_dump($first + $last);

?>

<br><br>

<?php

// Equality & Identity

$a = [
    "first_name" => "Rizki",
    "last_name" => "Ramadhan"
];

$b = [
    "last_name" => "Ramadhan",
    "first_name" => "Rizki"
];

var_dump($a == $b);
var_dump($a === $b);

?>

<br><br>

<?php

// Inequality

$a = [
    "first_name" => "Rizki",
    "last_name" => "Ramadhan"
];

$b = [
    "last_name" => "Ramadhan",
    "first_name" => "Rizki"
];

$c = [
    "first_name" => "Rizki"
];

var_dump($a != $b);
var_dump($a <> $c);

?>

<br><br>

<?php

// Nonidentity

$a = [
    "first_name" => "Rizki",
    "last_name" => "Ramadhan"
];

$b = [
    "last_name" => "Ramadhan",
    "first_name" => "Rizki"
];

$c = [
    "first_name" => "Rizki",
    "last_name" => "Ramadhan"
];

var_dump($a !== $b);
var_dump($a !== $c);
