<html>
  <head>
    <title>TP 71</title>
  </head>
  <body>
    <?php
      class CRectangulo 
        {
          private $l;
          private $a;
          public function __construct($lar,$anc){
              $this->largo = $lar;
              $this->ancho = $anc;
          }
          public function getl()
          {
              return $this->largo;
          }
          public function geta()
          {
              return $this->ancho;
          }
          public function CalcularPerimetro()
          {
              return $this->largo*2+$this->ancho*2;
          }
          public function CalcularArea()
          {
              return $this->largo * $this->ancho;
          }
          public function MostrarDatos() 
          {
      return "el largo es: ".$this->largo."<br>"."el ancho es: ".$this->ancho."<br>"."el perimetro es: ".$this->CalcularPerimetro()."<br>"."el area es: ".$this->CalcularArea()."<br>";
          }
      }
      $rectangulo= new CRectangulo($_POST['largo'], $_POST['ancho']);
      echo $rectangulo-> MostrarDatos() ."<br>";
    ?>
  </body>
</html>