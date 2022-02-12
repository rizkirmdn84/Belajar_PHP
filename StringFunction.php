<?php

// documentation https://www.php.net/manual/en/ref.strings.php

var_dump(join(",", [10, 11, 12, 13, 14, 15]));
?>

<br><br>

<?php
var_dump(explode(" ", "Rizki Ramadhan"));
?>

<br><br>

<?php
var_dump(strtolower("RIZKI RAMADHAN"));
?>

<br><br>

<?php
var_dump(strtoupper("rizki ramadhan"));
?>

<br><br>

<?php
var_dump(trim("                Rizki              "));
?>

<br><br>

<?php
var_dump(substr("Rizki Ramadhan", 0, 3));
