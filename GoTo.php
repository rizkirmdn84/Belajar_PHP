<?php

goto a;
echo "Hello World";

a:
echo "Hello A";

?>

<br><br>

<?php

$counter = 1;

while (true) {
    echo "ini adalah for while ke-$counter <br>";
    $counter++;

    if ($counter > 20) {
        goto end;
    }
}

end:
echo "End Loop";
