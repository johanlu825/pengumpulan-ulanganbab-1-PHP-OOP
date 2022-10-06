<?php

class motor {

    public $nama;
    public $id_machine;
    public $type;

    public function __construct($nama,$level)
    {
        $this-> nama = "vario";
        $this-> id_machine = "1245";
        $this-> type = "automatic";
    }
    
}

$obj = new motor("vario","1245","automatic");

echo 'nama:'.$obj->nama.'<br>';
echo 'id_machine:'.$obj->id_machine.  '<br>';
echo 'type:' . $obj ->type. '<br>';