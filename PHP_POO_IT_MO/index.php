<?php
require "Mage.php";
require "superman.php";
require "Warrior.php";



 class Hero{
    private $name;

    private $strength;

    private $health;

    private $weapon;

    private $magicPower;

     public function getName(){
        return $this->name;
     }
     public function setName($name){
        return $this->name =$name;
     }

     public function getStrength(){
        return $this->strength;
     }
     public function setStrength($strength){
        return $this->strength =$strength;
     }
     public function getHealth(){
        return $this->health;
     }
     public function setHealth($health){
        return $this->health =$health;
     }
     public function getMagicPower(){
        return $this->magicPower;
     }
     public function setMagicPower($magicPower){
        return $this->magicPower =$magicPower;
     }
     
     

    public  function __construct($name, $strength,$health){
        $this->name =$name;
        $this->strength =$strength;
        $this->health=$health;
    }
   public function display(){
        echo " NOM: {$this->name} FORCE {$this->strength}  SANTE {$this->health}  ";
    }
    
    public function attaque($attaque){
        echo "{$this->name}  {$attaque}!";

    }

 }
 $hero =new Hero("Noah", 100, 10);
 $hero->display();
 echo("<br>");

 $attaqueHero = new Hero("Noah", 0, 0, "Attaque !!");
$attaqueHero->attaque("Attaque !!");

 

