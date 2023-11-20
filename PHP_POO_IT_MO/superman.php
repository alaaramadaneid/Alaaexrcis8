<?php


class Superman extends Hero{
    public  function __construct($name, $strength,$health){
        $this->name =$name;
        $this->strength =$strength;
        $this->health=$health;
    }
    function display(){
        echo " NOM: {$this->name} FORCE {$this->strength}  SANTE {$this->health}  ";

    }
    
}
$superman =new Superman("Alaa", 200, 30);
$superman->display();
echo("<br>");


