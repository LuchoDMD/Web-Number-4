<?php
    require_once(dirname(__DIR__)."/Config/Autoload.php");
    //require_once("../Models/Client.php");
    //require_once("../Repository/ClientRepository.php");
    use Models\Client as Client;
    use Repository\ClientRepository as ClientRepository;

    $pEmail="/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b/";
    $pName="/^[a-zA-Z0-9]+$/";
    $msg='no valido. Volver a el formulario de registro.';
    
    if($_POST)
    {
        if(!preg_match($pEmail,$_POST['email']))
            echo '<script window.locationf="../Index/registForm">Email '.$msg.'</script>';
        else if(!preg_match($pName,$_POST['lastName']))
        {
            echo '<script window.locationf="../Index/registForm.php">Apellido';
            if(!preg_match($pName,$_POST['firstName']))
            {
                echo 'y Nombre';
            }
            echo $msg;
        }else
        {
            /**Almaceno en un objeto de la clase cliente*/
            $client=new Client();
            $client->setId($_POST['id']);
            $client->setUserName($_POST['userName']);
            $client->setPassword($_POST['password']);
            $client->setLastName($_POST['lastName']);
            $client->setFirstName($_POST['firstName']);
            $client->setDni($_POST['dni']);
            $cRepo=new ClientRepository();
            $cRepo->add($client);
            echo '<script window.locationf="../Index/logForm.php">Registro completado por favor logeese';
        }
        echo '</script>'; 
    } 
?>

