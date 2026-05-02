<?php

$names = ["Saya", "Rezthu", "Azaly"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello " . $names[$i] . PHP_EOL;
}

foreach ($names as $name) {
    echo "Hello " . $name . PHP_EOL;
}

$person = [
    "first_name" => "Saya",
    "middle_name" => "Rezthu",
    "last_name" => "Azaly"
];

foreach ($person as $key => $value) {
    echo "$key : . $value" . PHP_EOL;
}

// Tugas Selesai