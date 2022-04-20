<?php
class Fruit
{
    public $name;
    protected $color;
    private $weight;

    function set_name($n)
    {
        $this->name = $n;
    }

    protected function set_color($n)
    {
        $this->color = $n;
    }

    private function set_weight($n)
    {
        $this->weight = $n;
    }
}

$manggo = new Fruit('Manggo', 'blue');
$manggo->set_name('Apel'); // Ok

print("Name of fruit $manggo->name");
// $manggo->set_color('Yellow'); // Error
// $manggo->set_weight('300'); // Error
