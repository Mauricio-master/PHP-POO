<?php
class Perro{
    
    //atributos
    public $nombre;
    public $raza;
    public $edad;
    public $sexo;
    public $adiestrado;
    public $foto;
    public $comida;
    private $pulgas;
    
    public static $mejor_amigo = " hombre";
    
     //metodos magicos
     
    public function __construct($n, $r, $e, $s, $a, $f, $p){
        $this->nombre = $n;
        $this->raza = $r;
        $this->edad = $e . 'años';
        $this->sexo = ($s) ? 'macho' : 'hembra';
        $this->adiestrado = ($a) ? 'adiestrado' : 'no adiestrado';
        $this->foto = $f;
        $this->pulgas = $p;
        
        echo ' hola soy el constructor de la clase';
        
    }
    
    public function __destruct(){
        echo '<p> chao soy el destructor de la clase </p>';
        
    }
    
    //metodos
   public function ladrar(){
       
       echo '<p><mark>guauu !! </mark></p>';
       
   } 
    
     public function comer($c){
      $this->comida = $c;
         echo '<p>' . $this->nombre . '  come ' . $this->comida . '</p>';
       
   }
     public function aparecer(){
       echo '<img src="' . $this->foto . '">';
   }
    public function tiene_Pulgas(){
        echo ($this->pulgas)? 'tiene pulgas' : 'no tiene pulgas';
    }
    
    public function ladrar_y_comer(){
        self::ladrar();
        Perro::comer('hueso');
        echo '<p> el mejor amigo del perro es el ' . Perro::$mejor_amigo . '</p>';
    }
       
}
//instaciar metodos de la clase
$obj = new Perro('Rocky','boldoc','3',true,true,'http://jonmircha.github.io/slides-poo-js/img/kenai.jpg', false);

echo '<h1>'. $obj->nombre .'</h1>';
echo '<h1>'. $obj->raza .'</h1>';
echo '<h1>'. $obj->edad .'</h1>';
echo '<h1>'. $obj->sexo .'</h1>';
echo '<h1>'. $obj->adiestrado.'</h1>';


$obj->ladrar();
$obj->comer('purina');
$obj->aparecer();
$obj->tiene_Pulgas();
$obj->ladrar_y_comer();
