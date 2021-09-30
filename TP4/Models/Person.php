<?php  
    namespace Models;
    require_once('Config\Autoload.php');
    abstract class Person
    {
        private $lastName,$firstName,$dni;

        function __construct()
        {
            $this->lastName='';
            $this->firstName='';
            $this->dni='';
        }
        public function getLastName(){ return $this->lastName; }
        public function setLastName($lastName): self { $this->lastName = $lastName; return $this; }

        public function getFirstName(){ return $this->firstName; }
        public function setFirstName($firstName): self { $this->firstName = $firstName; return $this; }

        public function getDni(){ return $this->dni; }
        public function setDni($dni): self { $this->dni = $dni; return $this; }

        public function __toString()
        {
            return 'Apellido/s: '.$this->lastName.'.<br>Nombre/s: '. $this->firstName.'.<br>D.N.I: '.$this->dni;
        }
    }
?>
