<?php

$sayHello = function (string $name) {
    echo "Hello $name <br>";
};

$sayHello("Rizki");
$sayHello("Budi");

?>

<br><br>

<?php

// Anonymous Function Sebagai Argument

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName <br>";
}

// Cara Pertama

sayGoodBye("Rizki", function (string $name): string {
    return strtoupper($name);
});

// Cara Kedua

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Rizki", $filterFunction);

?>

<br><br>

<?php

// Mengakses Variable Luar

$firstName = "Rizki";
$lastName = "Ramadhan";

$sayHelloRizki = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName <br>";
};

$sayHelloRizki();
