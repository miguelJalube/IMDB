<?php

class Voiture{
    private $roues;
    private $portes;
    private $vitesseMax;
    private $position;
    
    public function __construct($roues, $portes, $vitesseMax, $position){
        $this->roues = $roues;
        $this->portes = $portes;
        $this->vitesseMax = $vitesseMax;
        $this->position = $position;
    }
    
    public function getRoues() {
        return $this->roues;
    }

    public function getPortes() {
        return $this->portes;
    }

    public function getVitesseMax() {
        return $this->vitesseMax;
    }

    public function setRoues($roues) {
        $this->roues = $roues;
    }

    public function setPortes($portes) {
        $this->portes = $portes;
    }

    public function setVitesseMax($vitesseMax) {
        $this->vitesseMax = $vitesseMax;
    }

    public function avance(){
        for($i = 0; $i <= $this->vitesseMax ; $i++){
            $this->position++;
        }
    }
    
}

$mavoiture = new Voiture(4, 2, 300, 21);

echo $mavoiture->getPortes();

$mavoiture->setPortes(4);