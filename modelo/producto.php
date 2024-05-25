<?php

class Producto {
    public $Id;
    
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;


    public function MostrarDatos(){
        echo 'Nombre:'.$this->Nombre. '<br>';
        echo 'Precio: $ '.$this->Precio. '<br>';
        echo 'Stock:'. $this->Stock. '<br>';
        echo 'Tipo de producto: '. $this->TipoProducto->Descripcion. '<br>';
        echo 'Tipo de  producto id:  '. $this-> TipoProducto->Id. '<br>';

    }









}
