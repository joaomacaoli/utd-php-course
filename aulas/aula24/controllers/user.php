<?php

    include_once dirname(__DIR__).'/models/config.php';

    if(isset($_POST['action'])){

        include_once $pathBase.'/models/classes/Connect.php';
        include_once $pathBase.'/models/classes/Manager.php';

        switch($_POST['action']){
            
            case 'insert':                
                unset($_POST['action']);
                $_POST['user_password'] = sha1($_POST['user_password']);
                $manager = new Manager();
                $return = $manager->insert_common("users", $_POST, null);                           
            break;

            case 'update':                
                unset($_POST['action']);
                if($_POST['user_password'] != ""){
                    $_POST['user_password'] = sha1($_POST['user_password']);
                }else{
                    unset($_POST['user_password']);
                }

                $manager = new Manager();
                $filter['id_user'] = $_POST['id_user'];
                $return = $manager->update_common("users", $_POST, $filter, null);
           
            break;

            case 'delete':                
                unset($_POST['action']);                
                $manager = new Manager();
                $return = $manager->delete_common("users", $_POST, null);                          
            break;

        }

            if(!$return){
                header("location: ".$urlBase."/sandbox.php?option=listUsers&msg=error");                    
            }else{
                header("location: ".$urlBase."/sandbox.php?option=listUsers&msg=success");
            } 

    }else{
        header("location: ".$urlBase."/sandbox.php?option=listUsers&msg=notFound");   
    }


?>