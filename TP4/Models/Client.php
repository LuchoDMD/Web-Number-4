<?php  
    namespace Models;
    require_once('Config\Autoload.php');
    use Models\Person as Person;
    class Client extends Person
    {
        private $id,$userName,$email,$password;

        public function __construct()
        {
            $this->id=0;
            $this->userName='';
            $this->email='';
            $this->password='';
            parent::__construct();
        }
        
        public function getId(){ return $this->id; }
        public function setId($id): self { $this->id = $id; return $this; }

        public function getUserName(){ return $this->userName; }
        public function setUserName($userName): self { $this->userName = $userName; return $this; }

        public function getEmail(){ return $this->email; }
        public function setEmail($email): self { $this->email = $email; return $this; }

        public function getPassword(){ return $this->password; }
        public function setPassword($password): self { $this->password = $password; return $this; }

        public function __toString()
        {
            return 'Usuario:'.$this->userName.'.<br>E-mail: '.$this->email.'.<br>Contraseña: '.$this->password.'.<br>'.parent::__toString();
        }
    }

    
?>
