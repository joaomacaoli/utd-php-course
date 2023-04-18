<?php

    function validateOption(){

        if(!isset($_GET['option'])){
            return false;
        }

        include_once 'models/classes/Connect.php';
        include_once 'models/classes/Manager.php';

        switch($_GET['option']){

            case 'listUsers':               

                $titlePage = "Listagem de Usuários";

                $manager = new Manager();

                $users = $manager->select_common("users", null, null, null);

                include_once $GLOBALS['pathBase']."/views/users/listUsers.php";

            break;    
            
            case 'insertUser':
                $titlePage = "Inserção de Usuário no Sistema";
                include_once $GLOBALS['pathBase']."/views/users/insertUser.php";
            break;

            case 'updateUser':
                $titlePage = "Atualização de Usuário no Sistema";
                $manager = new Manager();
                $filter['id_user'] = base64_decode($_GET['id']);
                $user = $manager->select_common("users", null, $filter, null)[0];

                include_once $GLOBALS['pathBase']."/views/users/updateUser.php";
            break;


            case 'listProducts':               

                $titlePage = "Listagem de Produtos";
                $manager = new Manager();
                $products = $manager->select_common("products", null, null, null);
                include_once $GLOBALS['pathBase']."/views/products/listProducts.php";

            break;  

        }


    }
