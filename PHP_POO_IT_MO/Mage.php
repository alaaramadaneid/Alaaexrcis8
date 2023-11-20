<?php

class Mage extends Hero{
    public  function __construct($name, $strength,$health,$magicPower){
        $this->name =$name;
        $this->strength =$strength;
        $this->health=$health;
        $this->magicPower=$magicPower;
    }
    function display(){
    echo " NOM: {$this->name} FORCE {$this->strength}  SANTE {$this->health}  MAGICPOWER {$this->magicPower} ";
    }
    public function castSpell($spell){
        echo "{$this->name} casts {$spell}!";

    }
    public function attackWithWeapon($weapon){
        return "Attaquer avec $weapon";
    }
    }

$mage =new Mage ("Mage", 300, 40," VOULER");
$mage->display();
echo("<br>");

$spellMage = new Mage("Mage", 0, 0, "Boule de feu");
$spellMage->castSpell("Boule de feu");
echo("<br>");


$mageWithWeapon = new Mage("Mage", 0, 0, "SomePower");
$mageWithWeapon->attackWithWeapon("Lance");
