<?php

class Person{
    //properti
   public string $name;
   public string $address;
   
   //method
   public function sayHello(string $name) {
    //halo nama kamu adalah: rezthu
    echo "halo nama kamu adalah: $name dan alamat di: $this->address";
   }
}



// function construct adalah sebuah function yang dipanggil pertama kali saat object di buat
