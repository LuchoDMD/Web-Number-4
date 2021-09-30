<?php  
    namespace Models;
    require_once('Config\Autoload.php');
    class Bill
    {
        private $id,$date,$type;/// A futuro podria tener una lista de items.

        public function __construct($id,$date,$type)
        {
            $this->id=$id;
            $this->date=$date;
            $this->type=$type;
        }

        public function getId(){ return $this->id; }
        public function setId($id): self { $this->id = $id; return $this; }

        public function getDate(){ return $this->date; }
        public function setDate($date): self { $this->date = $date; return $this; }

        public function getType(){ return $this->type; }
        public function setType($type): self { $this->type = $type; return $this; }

        public function __toString()
        {
            return 'ID= '.$this->id.'.<br>Fecha= '.$this->date.'.<br>Tipo: '.$this->type.'.<br>';
        }
    }
?>
