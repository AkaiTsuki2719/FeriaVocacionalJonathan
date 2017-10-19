<?php

class UserController {

    function __construct() {
        $this->view = new View();
    }

    public function insertUser() {
        require 'model/UserModel.php';
        
        $model = new UserModel();    

        $result['consulta'] = $model->insertUser($_POST['email'], $_POST['name'], $_POST['lastName']);

        $this->view->show("siteView.php", $result);
    }
    
    public function getEmailView() {
        
     $this->view->show("getEmailView.php", null);
     
    }
    
    public function getEmail() {
        
        require 'model/UserModel.php';
        
        $model = new UserModel();    

        $emailsreci="";
        
        $result['consulta'] = $model->getEmail();
        
      	foreach ($result['consulta'] as $clave=>$valor){
   		
            $emailsreci.= $valor[0].",";
   	     
        }
       
        echo $emailsreci;
    }

}
