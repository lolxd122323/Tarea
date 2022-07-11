
<?php
class Trabajador{
    private $n;
    private $h;
    private $s;
    function __construct($nom,$hor,$sue){
      $this->nombre = $nom;
      $this->horas = $hor;
      $this->sueldo = $sue;
    }
  
    public function getNom()
    {
      return $this->nombre;
    }
    public function getHor()
    {
      return $this->horas;
    }
    public function getSueH()
    {
      return $this->sueldo;
    }
   
    public function calcularSue()
    {
      return $this->horas * $this->sueldo;
    }
  }

  $traba = new Trabajador($_POST['nombre'], $_POST['horas'], $_POST['sueldo']);
  echo "Su nombre: ".$traba->getNombre() ."<br>";
  echo "Horas trabajadas: " .$traba->getHor() ."<br>";
  echo "Sueldo por hora: " .$traba->getSueH() ."<br>";
  echo "Sueldo total empleado ".$traba->getNom()." : ". $traba->calcularSueldo() ."<br>";
?>
