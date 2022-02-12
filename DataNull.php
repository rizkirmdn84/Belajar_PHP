<?php

$name = "Rizki";
$name = NULL;

$age = null;


// Mengecek Data Null

$isNull = is_null($name);
var_dump($isNull);

?>

<br>
<br>

<?php
// Menghapus Variable

$value = "Rizki";
unset($value);

var_dump(isset($value));

// -----

$value = "Rizki";

var_dump(isset($value));

?>