<?php

class Coche {
    
    // 1. ATRIBUTS
    private $_codigo;
    private $_brand;
    private $_cilindrade;
    private $_matric;
    private $_color;
    private $_combustible;

    // 2. CONSTRUCTOR
    public function __construct($cod,$brand,$cil,$matric,$color,$combustible){
        $this->_codigo = $cod;
        $this->_brand = $brand;
        $this->_cilindrade = $cil;
        $this->_matric = $matric;
        $this->_color = $color;
        $this->_combustible = $combustible;
    }

    // 3.1. SETTERS
    function setColor($color){
      $this->_color = $color;
    }    
    // 3.2. GETTERS
    function getId(){
      return $this->_codigo;
    }
    function getBrand(){
      return $this->_brand;
    }
    function getCylindrade(){
      return $this->_cilindrade;
    }
    function getMatric(){
      return $this->_matric;
    }
    function getColor(){
      return $this->_color;
    }
    function getCombustible(){
      return $this->_combustible;
    }

    // 4. METODOS 
    function toString(){
      $msg = "Id: " . $this->getId();
      $msg .= " - Brand: " . $this->getBrand();
      $msg .= " - Cylin: " . $this->getCylindrade();
      $msg .= " - Matri: " . $this->getMatric();  
      $msg .= " - Color: " . $this->getColor();
      $msg .= " - Comb.: " . $this->getCombustible() . "<br>";
      return $msg;
    }
}

?>
