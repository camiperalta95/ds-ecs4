<?php

require_once 'modelo/producto.php';
require_once 'modelo/tipoProducto.php';



$tipodeproducto= new TipoProducto();
$tipodeproducto->Id=2;
$tipodeproducto->Descripcion= 'galletitas';

$producto= new Producto();
$producto->Id=1;
$producto->Nombre= 'merenguitas';
$producto->Precio= '1000';
$producto->Stock= '10';
$producto->TipoProducto=$tipodeproducto;


$producto-> MostrarDatos();

