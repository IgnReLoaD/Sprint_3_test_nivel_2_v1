
<?php

class Concesionario{

    // 1. ATRIBUTS
    private $_arrItems;

    // 2. CONSTRUCTOR
    public function __construct($items){
        $this->_arrItems = $items;
    }

    // 3. GETTERs-SETTETS
    // no tiene, utilizamos los de class Coche

    // 4. METODOS ESPECIFICOS
    public function paintForEach(){
        echo "<h2> PAINT con bucle ForEach </h2>";        
        foreach ($this->_arrItems as $objCoche){
            // DEBUG:
            // echo "<br> objCoche ANTES de pintar: " . $objCoche->toString() . "<br>";            
            if (($objCoche->getId() % 2) == 0){
                // pares
                $objCoche->setColor('blue');
                echo "<br> objCoche <b>DESPUES</b> de pintar: <span style='color:blue'>" . $objCoche->toString() . "</span><br>";
            }else{
                // impares
                $objCoche->setColor('red');
                echo "<br> objCoche <b>DESPUES</b> de pintar: <span style='color:red'>" . $objCoche->toString() . "</span><br>";
            }            
        }    
        return true;      
    }

    public function paintFor(){
        echo "<h2> PAINT con bucle FOR $ i </h2>";
        // mirar el indice dentro del array y con la funcion modulo % ver si par o impar
        for ($i=0; $i <= count($this->_arrItems)-1; $i++){
            // DEBUG:
            // echo "<br> $this->_arrItems[$i] ANTES de pintar: " . $this->_arrItems[$i]->toString() . "<br>";            
            if (($i+1) % 2 == 0){
                $this->_arrItems[$i]->setColor('blue');
                echo "<br> objCoche <b>DESPUES</b> de pintar: <span style='color:blue'>" . $this->_arrItems[$i]->toString() . "</span><br>";
            }else{
                $this->_arrItems[$i]->setColor('red');
                echo "<br> objCoche <b>DESPUES</b> de pintar: <span style='color:red'>" . $this->_arrItems[$i]->toString() . "</span><br>";
            }
        }
    }

    public function listarGasolina(){
        $msg =  '<h2>LISTADO COCHES GASOLINA</h2>';        
        foreach ($this->_arrItems as $objCoche){                        
            if (($objCoche->getCombustible()=='Gasolina')){
                $msg .= $objCoche->getBrand() . '<br>';
            }
        }
        echo $msg;
    }
}

?>