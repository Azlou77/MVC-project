<?php 
class Personnage{
    private $vie= 40;//can access directly
    private $nom;//can access in class but not outside
    private $atk= 20;//like private 

    public function __construct($nom){
        $this->nom= $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
      $this->nom= $nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }
/*
    public function crier(){
        echo "For honor";
    }
*/
    public function regenerer($vie= null){
        if(is_null($vie)){
            $this->vie=100;
        } else {
            $this->vie += $vie;
        }
    }

    public function mort(){
        return $this->vie<=0;
    }

    private function stop_negatif(){
        if($this->vie < 0){
            $this->vie=0;
        }
    }
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->stop_negatif();
    }

}