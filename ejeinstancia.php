<?php
class producto {
    #DIFINICION DE LOS ATRIBUTOS
    public string $nombre;
    public int $precio;
    public bool $disponible;

    #METODO CONSTRUCTOR, SE EJECUTA AL EFECTUAR LA INSTANCIA
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        #SE LES DA VALORES A LOS ATRUBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONSTRUCTOR
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    #definicion de metodos
    public function mostrarProducto(){
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

}

   
//INSTANCIA DE LA CLASE EN EL PRIMER OBJETO
$producto = new Producto('tablet', 200, true);
// LLAMADO AL METODO MOSTRAR PRODUCTO, UTILIZANDO SINTAXIS DE FLECHA ->
$producto->mostrarProducto();

// INPRECION EN LA PANTALLA DEL PRIMER OBJETO
echo "<pre>";
var_dump($producto);
echo "</pre>";

//INSTANCIA DE LA CLASE EN EL SEGUNDO OBJETO
$producto2 = new Producto('Monitor Curvo', 300, true);
// LLAMADO AL METODO MOSTRAR PRODUCTO, UTILIZANDO SINTAXIS DE LA FLECHA ->
$producto2->mostrarProducto();

// IMPRECION DE LA PANTALLA DEL SEGUNDO OBJETO
echo "<pre>";
var_dump($producto);
echo "</pre>"; 

?>