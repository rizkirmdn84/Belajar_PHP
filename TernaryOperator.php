<?php

// Bila Penggunaan If Else

$gender = "Pria";
$hi = null;

if ($gender == "Pria") {
    $hi = "Hi Bro!";
} else {
    $hi = "Hi Nona!";
}

echo $hi;

?>

<br><br>

<?php

// Penggunaan Ternary Operator

$hi = $gender == "Pria" ? "Hi Bro" : "Hi Nona";

echo $hi;
