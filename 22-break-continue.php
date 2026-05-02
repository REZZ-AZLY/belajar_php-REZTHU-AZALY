<?php

$counter = 1;

while (true) {
    echo "Hello Bro : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }

    echo "Hello Bro : " . $counter . PHP_EOL;
}

// Tugas Selesai