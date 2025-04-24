<?php
    class CuentaController extends BaseController{
         
        public function __construct(){
            $this->authModel=$this->model('AuthModel');
            $this->authModel=$this->model('CuentaModel');
        }
        
       
        public function nueva_cuenta(){

            
            $data = [
                'error_login'=>'',
            ];
            $this->view('pages/cuentas/form_cuentas',$data);
            
        }
    }
?>