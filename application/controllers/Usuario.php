<?php 

class Usuario extends CI_Controller{

public function login(){  

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombreUsuario', 'nombreUsuario', 'required');
    $this->form_validation->set_rules('contra', 'contra', 'required');

    
            if($this->form_validation->run() === false){

                $this->load->view('headers/head');
                $this->load->view('usuario/login');
            }
            else{
        
        redirect(base_url('index.php/ClientesC/show'),'refresh');  
       
    }

}

}?>