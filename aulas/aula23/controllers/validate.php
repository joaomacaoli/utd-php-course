<?php

    function validateOption(){

        if(!isset($_GET['option'])){
            return false;
        }

        

        switch($_GET['option']){

            case 'listUser':
                include_once 'models/classes/Connect.php';
                include_once 'models/classes/Manager.php';

                $manager = new Manager();

                $users = $manager->select_common("users", null, null, null);

                print_r($users);


                echo "Olá, estou na funcão de listar usuários <br>";
            break;    
            
            case 'insertUser':
                echo "Olá, estou na funcão de inserir usuários! <br>";
            break;

        }


    }
