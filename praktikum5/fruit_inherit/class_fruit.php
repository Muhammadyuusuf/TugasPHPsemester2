<?php
class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "Aku adalah buah {$this->name} dan aku ini berwarna {$this->color}.";
    }
}

class Anggur extends Fruit
{
    public function message()
    {
        echo "Apakah aku buah sejenis beri? ";
    }
}

$anggur =  new Anggur('Anggur', 'ungu');
$anggur->message();
$anggur->intro();
