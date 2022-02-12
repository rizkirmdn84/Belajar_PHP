<?php

$name = "Rizki";

$otherName = &$name;

$otherName = "Budi";

echo $name;

?>

<br><br>

<?php

// Pass By Reference

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;

?>

<br><br>

<?php

// Returning References

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b;
