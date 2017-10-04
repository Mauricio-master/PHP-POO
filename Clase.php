<?php 

Class MyClase{
    // declarar una propiedad
    public $var = "PHP POO...";
    public static $My_static = "Hola";
    public function Mostrar(){
        
        //this referencia al objeto invocado
        echo $this->var;
        
    }
    
    public static function MetodoEstatico(){
        echo self :: $My_static;
    }
}

// crear instancia de una clase
$obj = new MyClase();
//llama al metodo mostrsr 
$obj -> Mostrar();
//llamar un metodo estatico
//MyClase ::  MetodoEstatico();
$obj->  MetodoEstatico();
?>