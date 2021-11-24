<?php
class Fruit {
    
    // Properties
    public $name;
    public $color;
    
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
    
    function setNameAndColor($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    
    function getNameAndColor($name, $color) {
        $data['name'] = $this->name;
        $data['color'] = $this->color;
        
        return $data;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>