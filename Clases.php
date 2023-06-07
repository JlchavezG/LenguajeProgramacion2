<?php 
 class Persona{
  private $Nombre;
  private $Apellidos;
  private $Edad; 
  public function __construct($Nombre, $Apellidos, $Edad){
    $this->Nombre = $Nombre;
    $this->Apellidos = $Apellidos;
    $this->Edad = $Edad;
  }
  public function VerNombre(){
    return $this->Nombre;
  }
  public function VerApellidos(){
    return $this->Apellidos;
  }
  public function VerEdad(){
    return $this->Edad;
  }
 }
?>
<?php 
$ObjetoPersona = new Persona('Angel','Juarez','21');
echo $ObjetoPersona->VerNombre();
echo $ObjetoPersona->VerApellidos();
echo $ObjetoPersona->VerEdad();

$ObjetoPersonaUno = new Persona('Mario','Amaya','33');
echo $ObjetoPersonaUno->VerNombre();
echo $ObjetoPersonaUno->VerApellidos();
echo $ObjetoPersonaUno->VerEdad();


?>