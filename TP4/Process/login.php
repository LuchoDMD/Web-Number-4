<?php  
    $parameters=array();
    $msg_error='';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if($_POST['form']=='login')
        {
            ///TODAS LAS COMPROBACIONES DEL LOGEO.
        }else
        {
            header("Location:../Index/regisForm.php");
        }
    }
?>
