<?php

// Tanpa Null Coalescing

$data = [
    "action" => "Create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action;

?>

<br><br>

<?php

// Menggunakan Null Coalescing Operator

$action = $data["action"] ?? "Nothing";

echo $action;
