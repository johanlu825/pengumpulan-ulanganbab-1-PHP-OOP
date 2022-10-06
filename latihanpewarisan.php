<?php
trait role {
    abstract public function getrole():String;
}

class superclass {

    public $nama;
    public $level;
    public $index;
    public $is_status;

    public function __construct($nama, $level, $is_status = "superclass")
    {
        $this->nama = $nama;
        $this->level = $level;
        $this->index = 1;
        $this->is_status = $is_status;
    }


    public function getName()

    {
        return $this->nama;
    }

    public function getStatus()
    {
        return $this->is_status;
    }
    public function getlevel()
    {
        return $this->level;
    }

    public function display()
    {
        echo 'no '. self::$index++ . '<br>';
        echo 'nama: '. $this->getname() . "<br>";
        echo 'level: '. $this->getmarga() . "<br>";
        echo 'status: '. $this->getumur() . "<br>";
        if($this->is_status == "superclass"){
           echo 'status: '. $this->getstatus() . '<br>';
           $this->space() . '<br>';
        }else{
            echo 'status: ' . $this->getstatus() . '<br>';
        } 

    }

    public function space()
    {
        echo '<hr>';
    }
}
 
class subclass {
    use Role;

    public $role;

    public function __construct($nama, $level, $is_status, $type ="subclass");
    {
       function __construct($nama, $level, $is_status, $type);
       $this->nama = $nama;
       $this->level = $level;
       $this->is_status = $is_status;
       $this->type = $type;
    }

    
    public function gettype(): string
    {
        return $this->type;
    }
}

    $obj = new superclass("easy", 1 , 'superclass');
    $obj = new subclass("medium", 2 , 'subclass');
    $obj = new subclass("medium", 3 , 'subclass');

    echo $babeh ->display();
    echo $bocil ->getALLDisplay();