<?php

class Transporte {
    protected int $ruedas;
    protected int $capacidad;
    public function __construct(int $ruedas, int $capacidad)
    {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }


    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . "personas ";
    }


    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {

    public fUnction getInfo() : string {
        return  "El transporte tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . "personas y NO GASTA
        GASOLINA ";
    }
}

class Automovil extends Transporte {

    protected string $transmision;
    public function __construct(int $ruedas, int $capacidad, string $transmision)
    {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
        $this->transmision = $transmision;
    }
    
    public fUnction getTransmision() : string {
        return $this->transmision;
    }
}    

//INSTANCIA DEL PRIMER OBJETO
$bicicleta = new Bicicleta(2, 1);
// EJECUCION DEL METODO HEREDADO DE TRANSPORTE
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

// instancia del segundo objeto, con el atributo adicional
$auto = new Automovil(4, 4, 'Manual');
// METODO HEREDADO DE TRANSPORTE
echo $auto->getInfo();
// METODO DE LA CLASE AUTOMOVIL
echo $auto->getTransmision();

?>
