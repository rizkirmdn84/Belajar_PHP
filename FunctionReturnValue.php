<?php

function sum(int $first, int $second): int // Tambahan Return Type Declarations 
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

?>

<br><br>

<?php

function getFinalValue(int $value): string // Tambahan Return Type Declarations
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);

?>

<br><br>

<?php

$score = getFinalValue(40);
var_dump($score);

?>

<br><br>

<?php

// Return Type Declarations
