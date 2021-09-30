<?php  
    namespace Interface;
    
    use Models\Client as Client;
    
    ///Es similar a la interfaz de collection de java.

    interface IActions
    {
        public function add(Client $client); 
        public function remove(Client $client);
        public function getAll();
    }
    /**
     * public function add(object $object); 
     * public function remove(object $object);
     * public function getAll();
     * Esto lo vuelve mas generico para su uso. No se si es lo ideal */
?>
