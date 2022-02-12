<?php

$nilai = 80;
$absen = 90;


if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A";
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B";
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C";
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D";
} elseif ($nilai >= 40 && $absen >= 40) {
    echo "Nilai Anda E";
} else {
    echo "Maaf Anda Tidak Lulus";
}

?>

<br><br>

<?php
// If Statement Dengan Colon

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A";
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B";
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C";
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D";
elseif ($nilai >= 40 && $absen >= 40) :
    echo "Nilai Anda E";
else :
    echo "Maaf Anda Tidak Lulus";
endif;

?>