<?php

$name = "Rezthu";
$grade = 80;
$standar = 85;
$remedial = 75;

if($grade > $standar) {
    echo "Lulus";
}elseif($remedial >$standar) {
    echo "Lulus Remedial";
}else {
    echo "Tidak Lulus";
}

// tugas
// tambahkan logika perbandingan