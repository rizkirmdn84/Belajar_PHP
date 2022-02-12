<?php

$values = array(1, 2, 3, 4);
var_dump($values);

?>

<br>
<br>

<?php


$names = ["Rizki", "Ramadhan"];
var_dump($names);

?>

<br>
<br>

<?php
// Operasi Array

var_dump($names[0]);

?>

<br>
<br>

<?php

$names[0] = "Budi";
var_dump($names);

?>

<br>
<br>

<?php

unset($names[1]);
var_dump($names);

?>

<br>
<br>

<?php

$names[] = "Rizki";
var_dump($names);

?>

<br>
<br>

<?php

var_dump(count($names));

?>

<br>
<br>

<?php
// Array Map

$rizki = array(
    "id" => "Rizki",
    "name" => "Rizki Ramadhan",
    "age" => 23
);

$budi = [
    "id" => "Budi",
    "name" => "Budi Nugraha",
    "age" => 32
];

var_dump($rizki);
?>

<br>
<br>

<?php
var_dump($budi);

?>

<br>
<br>

<?php
// Array didalam Array

$rizki2 = array(
    "id" => "Rizki",
    "name" => "Rizki Ramadhan",
    "age" => 23,
    "address" => [
        "city" => "Bekasi",
        "country" => "Indonesia"
    ]
);

var_dump($rizki2);
?>