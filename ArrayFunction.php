<?php

// documentation https://www.php.net/manual/en/ref.array.php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn (int $value) => $value * 10, $data);
var_dump($dataResult);

?>

<br><br>

<?php
rsort($data);
var_dump($data);

?>

<br><br>

<?php

var_dump(array_keys($data));

?>

<br><br>

<?php

var_dump(array_values($data));

?>

<br><br>

<?php

$person = [
    "first_name" => "Rizki",
    "last_name" => "Ramadhan"
];

var_dump(array_keys($person));

?>

<br><br>

<?php

var_dump(array_values($person));
