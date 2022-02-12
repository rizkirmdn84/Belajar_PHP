<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Selamat Anda Lulus Dengan Sangat Baik";
        break;
    case "B":
    case "C":
        echo "Selamat Anda Lulus";
        break;
    case "D":
        echo "Maaf Anda Tidak Lulus";
        break;
    default:
        echo "Mungkin Anda Salah Jurusan";
}

?>

<br><br>

<?php
// Switch Statement Syntax Dengan Colon

switch ($nilai):
    case "A":
        echo "Selamat Anda Lulus Dengan Sangat Baik";
        break;
    case "B":
    case "C":
        echo "Selamat Anda Lulus";
        break;
    case "D":
        echo "Maaf Anda Tidak Lulus";
        break;
    default:
        echo "Mungkin Anda Salah Jurusan";
endswitch;

?>