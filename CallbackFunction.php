<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);

    echo "Hello $finalName <br>";
}

sayHello("Rizki", "strtoupper");
sayHello("Rizki", "strtolower");
sayHello("Rizki", function (string $name): string {
    return strtoupper($name);
});
sayHello("Rizki", fn ($name) => strtolower($name));
