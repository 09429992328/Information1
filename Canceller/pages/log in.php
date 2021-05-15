<?php

require_once('../dao/crudDAO.php');


 $userlogin = new crudDAO();

if($_POST['btn-login']){  

        $email = $_POST['email'];  
        $password = $_POST['password'];  

        $user = $userlogin->Login($email,$password);  

        if ($user) {  
        
         echo "Login Successful";
        	
        } else {  
             
              echo "Login failed";
        }  
    }  


              
?>