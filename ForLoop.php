<?php

// Perulangan Tanpa Henti

// for (;;) {
//     echo "ini adalah for loop";
// }

// 
?>

<br><br>

<?php

// Perulangan Dengan Post Statement

for ($counter = 0; $counter <= 10; $counter++) {
    echo "ini adalah for loop ke-$counter <br>";
}

// Syntax Alternative For Loop

for ($counter = 10; $counter >= 1; $counter--) :
    echo "ini adalah for loop ke-$counter<br>";
endfor;

?>