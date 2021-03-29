<?php
class Player {
    // Properties
    public $name;
    public $speed = 5;
    public $running = false;

    // Methods
    function set_name($name){
        $this->name = $name;
    }
    
    function get_name(){
        return $this->name;
    }

   
}


$player1 = new Player();
$player1->set_name("Pavan");
echo $player1->get_name();
echo "<br>";
echo $player1->speed;
echo "<br>";

$player2 = new Player();
$player2->set_name("Rohan");
echo $player2->get_name();
echo "<br>";




?>