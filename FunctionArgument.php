<?php

function sayHello($first_name, $last_name)
{
    echo "Hello $first_name $last_name <br>";
}

sayHello("Rizki", "Ramadhan");

?>

<br><br>

<?php

// Default Argument Value

function Rizki($first_name = "Rizki")
{
    echo "Hello $first_name <br>";
}

Rizki();
Rizki("Ramadhan");

?>

<br><br>

<?php

// Type Declaration

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total <br>";
}

sum(100, 100);
sum("100", "100");
sum(true, false);

?>

<br><br>

<?php

// Variable-length Argument List

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total <br>";
}

sumAll(1, 2, 3, 4, 5);
