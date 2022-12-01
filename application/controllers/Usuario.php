<?php 

class Usuario extends CI_Controller{

public function login(){  

    $this->load->view('headers/head');
    $this->load->view('usuario/login');
    if(isset($_POST['contra'])){
        $this->load->model('UsuarioM');
        
        if ($this->UsuarioM->validaUsuario($_POST['nombreUsuario'],$_POST['contra'])){

            redirect(base_url('index.php/JefeDepartamentosC/show'),'refresh'); 

        }else if ($this->UsuarioM->validaUsuarioE($_POST['nombreUsuario'],$_POST['contra'])) {

            redirect(base_url('index.php/PlantaC/show'),'refresh'); 

        }else{
           
        }
    }

}

}?>