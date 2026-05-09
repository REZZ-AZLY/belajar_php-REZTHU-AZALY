<?php

class Hewan{
    public $name;

    public function suara(){
        echo "suara hewan $this->name adalah meong, dia memiliki $this->tail ekor".PHP_EOL;
    }
}
public function menambahEkor (int $addTail){
    $this->tail = $addTail;
}

// bagaiamana cara intance claa agar bisa membuat object

$kucing = new Hewan();
$kucing->name = "kurama";
$kucing->menambahEkor(9);
$kucing->suara();
echo $kucing->name;