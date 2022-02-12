<?php

function foo()
{
    echo "Foo <br>";
}

function bar()
{
    echo "Bar <br>";
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();


?>

<br><br>

<?php

// Penggunaan Variable Function

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName <br>";
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
