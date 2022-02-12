<?php

$counter = 1;

while ($counter <= 10) {
    echo "ini adalah for while ke-$counter <br>";
    $counter++;
}

?>

<br><br>

<?php
// Syntax Alternative For Loop

$counter = 1;

while ($counter <= 10) :
    echo "ini adalah for while ke-$counter <br>";
    $counter++;
endwhile;
