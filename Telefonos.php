<?php

//Herencia y  polimorfismo

class Telefono {
    public $marca;
    public $modelo;
    protected  $alambrico = true;
    protected $comunicacion;
    
    public function __construct($marca , $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->comunicacion = ($this->alambrico) ? 'Alambrico' : 'inalambrico';
        
    }
    
    public function llamar() {
        return  print ('<p> Riiiiin Riiiin !!!</p>');
        
    }
    
   
    public function mas_info() {
        return print('<ul>
        <li> Marca <b>' . $this->marca . '</b></li>
        <li> Modelo <b>' . $this->modelo . '</b></li>
        <li> Comunicacion <b>' . $this->comunicacion . '</b></li>
       </ul> ');
        
    }
}

class Celular extends Telefono {
    protected $alambrico = false;
    
    public function __construct($marca, $modelo){
        //para llamar una funcion de la clase padre
        parent::__construct($marca, $modelo);
        
    }
    
    
}

 final class SmarthPhone extends Celular {
     
     //polimorfismo
     public $alambrico = false;
     public $internet = true;
     
     public function __construct( $marca, $modelo) {
         parent::__construct($modelo, $marca);
         
     }
     
     public function mas_info() {
       parent::mas_info();
       return print ('<ul><li>Dispositivo con acceso a  <b>'.(($this->internet) ? 'Internet' : 'No').'</b></li></ul>');
}
    
    
}

echo ('<h1> Evolucion del telefono</h1>');

echo '<h2> Telefono : </h2>';
$tel_casa = new Telefono('Panasonic' , 'KXTS550');
$tel_casa->llamar();
$tel_casa->mas_info();

echo ('<h1> Evolucion del telefono</h1>');

echo '<h2> Celular : </h2>';
$mi_cel = new Celular('nokia' , '1100');
$mi_cel->llamar();
$mi_cel->mas_info();

echo ('<h1> Evolucion del telefono</h1>');

echo '<h2> SmarthPhone : </h2>';
$mi_sp = new SmarthPhone('Motorola' , 'G3');
$mi_sp->llamar();
$mi_sp->mas_info();