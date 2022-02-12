<?php

$name = "Rizki Ramadhan";

echo "Name : " . $name;

?>

<br><br>

<?php

// Konversi ke Number & Sebaliknya

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

?>

<br><br>

<?php

// Mengakses Karakter

$name = "Rizki";

echo $name[4];
echo $name[3];
echo $name[2];
echo $name[1];
echo $name[0];

?>

<br><br>

<?php

// Variable Parsing

echo "Hello $name Selamat Belajar PHP";

?>

<br><br>

<?php

// Curly Brace

echo "Hello {$name}s Selamat Belajar PHP";
