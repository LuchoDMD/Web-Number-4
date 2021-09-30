<?php
    namespace Repository;
    require_once("../Models/Client.php");
    use Models\Client as Client;
    use Interface\IActions as IActions;

    class ClientRepository implements IActions
    {
        private $clientList=array(); ///En este se almacenan la informacion de entrada del formulario. 
        private $filename; ///En este se va a guardar el nombre del archivo para el directorio.
        
        public function __construct()
        {
            $this->filename=dirname('__DIR__').'/Data/Client.json';
        }
        
        private function retrieveData()
        {
            ///Almacena los elemento del archivo.json en la lista.
            $this->clientList=array();
            if(file_exists($this->filename))
            {
                $jsonContent=file_get_contents($this->fileName);
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
                foreach ($arrayToDecode as $element) 
                {
                    $client=new Client();
                    $client->setId($element['id']);
                    $client->setUserName($element['userName']);
                    $client->setEmail($element['email']);
                    $client->setPassword($element['password']);
                    $client->setLastName($element['lastName']);
                    $client->setFirstName($element['firstName']);
                    $client->setDni($element['dni']);
                    array_push($this->clientList, $client);
                }
            }
        }

        private function saveData()
        {
            ///Almacena los elementos de la lista en el archivo.json
            $arrayToEncode = array();
            foreach($this->clientList as $element)
            {
                $client=new Client();
                $element['id']=$client->getId();
                $element['userName']=$client->getUserName();
                $element['email']=$client->getEmail();
                $element['password']=$client->getPassword();
                $element['lastName']=$client->getLastName();
                $element['firstName']=$client->getFirstName();
                $element['dni']=$client->getDni();
                array_push($arrayToEncode, $element);
            }
            
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);///Esto hace al guardado legible.
            file_put_contents($this->fileName, $jsonContent);
        }

        public function add(Client $client)
        {
            $this->retrieveData();
            array_push($this->clientList, $client);
            $this->saveData();
        }

        public function remove(Client $client)
        {
            $this->retrieveData();
            array_unshift($clientList,$client->getUserName());
            $this->saveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();
            return $this->clientList;
        }
    }
?>
