<?php

// Tanpa For Each

$names = ["Rizki", "Ramadhan"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i] <br>";
}

?>

<br><br>

<?php

// Menggunakan For Each

foreach ($names as $name) {
    echo "Data $name <br>";
}

?>

<br><br>

<?php

// Menggunakan For Each Dengan Key

$person = [
    "first_name" => "Rizki",
    "last_name" => "Ramadhan"
];

foreach ($person as $key => $value) {
    echo "$key : $value <br>";
}
