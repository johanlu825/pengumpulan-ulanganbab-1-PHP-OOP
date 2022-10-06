<?php

class human{


    public $nama;
    public $umur;
    public $jurusan;
    public $is_active;
}

$obj = new human();

$obj -> nama ="johanlu";
$obj -> umur = 17;
$obj -> jurusan = "rekayasa perangkat lunak";  
$obj -> is_active = "true";

echo "nama: ". $obj->nama. '<br>';
echo "umur: ". $obj->umur. '<br>';
echo "kelas: ". $obj->jurusan. '<br>';
echo "active:". $obj->is_active. '<br>';