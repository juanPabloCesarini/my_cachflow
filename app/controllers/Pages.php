<?php
    class Pages extends Controller{
         
        public function __construct(){
            
        }

        public function index(){
            
            $datos = [
                "titulo" => "Bienvenidos a FSF"
            ];
            $this->vista('pages/index',$datos);
        }

        
   }
   
?>