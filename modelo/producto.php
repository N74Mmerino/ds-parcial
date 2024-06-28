<?php

class Producto {

    public $Codigo;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $Almacen;
    public $Categoria;

    public function MostrarDatos(){

        echo 'Producto <br>';
        echo '----------------------- <br>';
        echo '* Codigo de Producto ='.$this->Codigo.'<br>';
        echo '* Nombre del Producto = '.$this->Nombre.'<br>';
        echo '* Precio = '.$this->Precio.'<br>';

        echo '--------------------------------------------<br>';
        echo 'Stock del Producto <br> ';
        echo '--------------------------------------------<br>';
    
        if ($this->Stock >= 100) {
    
            echo 'Producto en abundancia <br>';
        }
    
        if ($this->Stock >= 50 && $this->Stock <= 100) {
    
            echo 'Stock moderado <br>';
        }
    
        if ($this->Stock < 50) {
    
            echo 'Stock bajo <br>';
        }

        echo '--------------------------------------------<br>';
        echo 'Almacen de Producto <br>';
        echo '--------------------------------------------<br>';
        echo '* Id ='.$this->Almacen->Id.'<br>';
        echo '* Nombre = '.$this->Almacen->Nombre.'<br>';
        echo '* Direccion = '.$this->Almacen->Direccion.'<br>';

        echo '--------------------------------------------<br>';
    
        

        echo 'Categoria de Producto <br>';
        echo '--------------------------------------------<br>';
        echo '* Id = '.$this->Categoria->Id.'<br>';
        echo '* Nombre = '.$this->Categoria->Nombre.'<br>';
        echo '--------------------------------------------<br>';
        
    
    
    
    }

}

