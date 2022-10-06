<?php

class motor {

    public $nama;
    public $id_machine;
    public $type;

    public function __construct($nama,$level)
    {
        $this-> nama = "CB250";
        $this-> id_machine = "3421";
        $this-> type = "sport";
    }
    
}

$obj = new motor("CB250","3421","sport");

echo 'nama:'.$obj->nama.'<br>';
echo 'id_machine:'.$obj->id_machine.  '<br>';
echo 'type:' . $obj ->type. '<br>';