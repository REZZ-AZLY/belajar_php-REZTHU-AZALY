<?php

$name = ["muhit", "mujit", "moke", "moki"];

$status = array("jomlo", "taken", "menikah");

$name[1] = "munir";

// menambahkan sebuah data ke arrray yang lama
$name[] = "mukidi";

// halo nama saya Rezthu, satatus saya sekarang jomlo

echo "halo nama saya $name[1], status saya sekarang $status[0]\n jumlah data ada ". count($name). "orang";

// jumlah data status adalah 3
echo "jumlah data status adalah : ". count($status);