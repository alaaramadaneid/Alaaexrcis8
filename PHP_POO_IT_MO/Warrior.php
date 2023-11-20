<?php


class Warrior extends Hero{
    public  function __construct($name, $strength,$health,$weapon){
        $this->name =$name;
        $this->strength =$strength;
        $this->health=$health;
        $this->weapon=$weapon;
    }
    function display(){
        echo " NOM: {$this->name} FORCE {$this->strength}  SANTE {$this->health}  WAPON {$this->weapon} ";
    }
    public function attackWithWeapon(){
        echo $this->name . " attacks with " . $this->weapon ;
    }
}
$warrior =new Warrior("Warrior", 300, 40,"épée");
$warrior->attackWithWeapon();
$warrior->display();
echo("<br>");

