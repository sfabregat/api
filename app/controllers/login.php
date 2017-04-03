<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Login extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Login'));
   			$this->model=new \X\App\Models\mlogin();
   			$this->view =new \X\App\Views\vlogin($this->dataView);    
   		}
         
   }

