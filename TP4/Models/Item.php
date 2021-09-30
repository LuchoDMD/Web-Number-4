<?php  
    namespace Models;
    require_once('Config\Autoload.php');
    class Item
    {
        private $name,$description,$price,$quantity;
        
        public function __construct($name,$description,$price,$quantity)
        {
            $this->name=$name;
            $this->description=$description;
            $this->price=$price;
            $this->quantity=$quantity;
        }

        public function getName(){ return $this->name; }
        public function setName($name): self { $this->name = $name; return $this; }

        public function getDescription(){ return $this->description; }
        public function setDescription($description): self { $this->description = $description; return $this; }

        public function getPrice(){ return $this->price; }
        public function setPrice($price): self { $this->price = $price; return $this; }

        public function getQuantity(){ return $this->quantity; }
        public function setQuantity($quantity): self { $this->quantity = $quantity; return $this; }

        public function __toString()
        {
            return 'Nombre: '.$this->name.'.<br>Descripcion: '.$this->description.'.<br>Precio: '.
            $this->price.'.<br>Cantidad: '.$this->quantity.'.<br>';
        }
    }
    
?>
