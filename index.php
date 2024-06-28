<?php

require_once 'modelo/almacen.php';
require_once 'modelo/categoria.php';
require_once 'modelo/producto.php';

$Categoria= new Categoria ();

    $Categoria->Id ='1';
    $Categoria->Nombre='Iluminacion';



$Almacen= new Almacen ();

    $Almacen->Id='1';
    $Almacen->Nombre='Almacen Principal';
    $Almacen->Direccion='Av.Libertador';


$Producto=new Producto ();

    $Producto->Codigo='1234';
    $Producto->Nombre='Lampara Led';
    $Producto->Precio='$25.99';
    $Producto->Stock= $_GET['stock'];
    $Producto->Almacen= $Almacen;
    $Producto->Categoria= $Categoria;

$Producto->MostrarDatos();