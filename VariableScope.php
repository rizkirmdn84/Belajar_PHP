<?php

$name = "Rizki"; // Global Scope : Tidak bisa digunakan didalam Function

function sayHello()
{
    // echo $name; // Tidak bisa memanggil global scope di dalam function
    echo $GLOBALS["name"];
}

sayHello();

?>

<br><br>

<?php

function createName()
{
    $name = "Rizki"; // Local Scope : Tidak bisa digunakan di luar Function
}

createName();
echo $name;
?>

<br><br>

<?php

$name = "Rizki"; // Global Scope : Tidak bisa digunakan didalam Function

function sayKey()
{
    global $name; // Global Keyword
    echo $name;
}

sayKey();
